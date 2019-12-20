# todo-app

## Requirements

- Docker
- Docker-compose

## Database design

### tasks table

| name       | type                | options                                 |
| ---------- | ------------------- | --------------------------------------- |
| id         | bigint(10) unsigned | null: false, auto increment             |
| folder_id  | bigint(29) unsigned | null: false, foreign_key: true(folders) |
| title      | varchar(100)        | null: false                             |
| due_date   | date                | null: false                             |
| status     | int(11)             | null: false                             |
| created_at | timestamp           |                                         |
| updated_at | timestamp           |                                         |

### folders table

| name       | type                | options                     |
| ---------- | ------------------- | --------------------------- |
| id         | bigint(20) unsigned | null: false, auto increment |
| title      | varchar(20)         | null: false                 |
| created_at | timestamp           |                             |
| updated_at | timestamp           |                             |
