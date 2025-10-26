#!/usr/bin/env bash
php artisan app:heal

php artisan optimize:clear

php artisan optimize

cd /var/www/html/storage/logs && > laravel.log

cd /var/www/html

php artisan light:reset

php artisan url:reset
