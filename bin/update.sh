#!/usr/bin/env bash

php artisan down
git pull
composer install --no-dev
npm ci
php artisan app:heal
cd /var/www/html/storage/logs && > laravel.log
cd /var/www/html
php artisan migrate
php artisan optimize:clear
php artisan optimize
php artisan route:export
npm run build
php artisan up