#!/bin/sh
php artisan db:seed --class=UsersTableSeeder
php artisan db:seed --class=FoldersTableSeeder
php artisan db:seed --class=TasksTableSeeder
