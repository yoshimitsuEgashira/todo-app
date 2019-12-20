<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use App\Task;

class EditTask extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rule = parent::rules();

        $status_rule = Rule::in(array_keys(Task::STATUS));

        return $rule + [
            'status' => 'required|' . $status_rule
        ];
    }

    public function attributes()
    {
        $attributes = parent::attributes();

        return $attributes + [
            'status' => '状態'
        ];
    }

    public function messages()
    {
        $messages = parent::messags();

        $status_labels = array_map(function($item) {
            return $item['label'];
        }, Task::STATUS);

        $status_labels = implode(',', $status_labels);

        return $messages + [
            'status.in' => ':attribute には '  . $status_labels . ' のいずれかを指定して下さい。'
        ];
    }
}
