# Laravel 7

## artisan

- php artisan make:controller PostContller
- php artisan make:controller PostContller -r
- php artisan make:migration create_posts_table
- php artisan make:model Post
- php artisan make:model Post -m
- php artisan make:model Post -mcr
- php artisan make:model Post -a
- php artisan make:model Post --help
- php artisan db:seed --class=PostSeeder
- php artisan db:seed
- php artisan migrate:fresh --seed
- php artisan make:middlware AuthWare
```
register middleare in app/Http/Kernel.php
```

## Installation

- git clone https://github.com/bm-member/laravel-blog-5 FOLDER_NAME
- cd FOLDER_NAME
- composer install
- cp .env.example .env
- php artisan key:generate
- Setup database
- php artisan migrate
- php artisan serve
