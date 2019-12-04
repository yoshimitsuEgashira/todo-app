# lara-docker

## Overview

This is a repository for building Laravel environment with docker (docker-compose).
The software used and its versions are as follows.

- PHP 7.3
- MySQL 8.0
- Nginx 1.17
- Laravel 6.0

## Setup

### Requirements

```
❯ docker -v
Docker version 19.03.5, build 633a0ea

❯ docker-compose -v
docker-compose version 1.24.1, build 4667896b
```

### Build and Up

```
❯ docker-compose build
❯ docker-compose up -d
```

or

```
❯ docker-compose up -d --build
```

### Excute command

```
❯ docker-compose exec app [ service name ] ash [ command ( ex: php -v ) ]
```

### Stop and Remove containers

```
❯ docker-compose down
```

## Install Laravel

```
❯ docker-compose exec app ash
/work # composer create-project --prefer-dist "laravel/laravel=6.0.*" .

/work # php artisan -V
Laravel Framework 6.6.1
```
