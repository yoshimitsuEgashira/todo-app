# todo-app

## Requirements

- Docker
  - Engine
  - Compose

## Database design

`created_at` , `updated_at` exist in all tables and are `timestamp` , so they are omitted in the following figures.

### tasks table

| name      | type                | options                                 |
| --------- | ------------------- | --------------------------------------- |
| id        | bigint(10) unsigned | null: false, auto increment             |
| folder_id | bigint(20) unsigned | null: false, foreign_key: true(folders) |
| user_id   | bigint(20) unsigned | null: false, foreign_key: true(users)   |
| title     | varchar(100)        | null: false                             |
| due_date  | date                | null: false                             |
| status    | int(11)             | null: false                             |

### folders table

| name  | type                | options                     |
| ----- | ------------------- | --------------------------- |
| id    | bigint(20) unsigned | null: false, auto increment |
| title | varchar(20)         | null: false                 |

### users table

| name              | type                | options                     |
| ----------------- | ------------------- | --------------------------- |
| id                | bigint(20) unsigned | null: false, auto increment |
| name              | varchar(255)        | null: false,                |
| email             | varchar(255)        | null: false, unique         |
| email_verified_at | timestamp           |                             |
| password          | varchar(255)        | null: false,                |
| remember_token    | varchar(100)        |                             |
