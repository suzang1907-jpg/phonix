#!/usr/bin/env bash
echo "Acting as ${whoami}"
read -p "Domain: " domain
read -p "Email: " appemail
read -sp "Password: " apppassword

cp /var/www/html/bin/000-default.conf /etc/apache2/sites-available/000-default.conf

sudo a2ensite 000-default.conf

sudo apache2ctl configtest

sudo systemctl restart apache2

sudo systemctl status apache2

sudo apt-get install cron

if [ -e node_modules ]
then
    echo "Node Modules already installed"
else
    npm ci
fi

if [ -e vendor ]
then
    echo "Vendor already installed"
else
    composer install --no-dev
fi

chmod 777 -R /var/www/html/storage/

if [ -e .env ]
then
    echo ".env already exists"
else
    echo "Creating .env"
    cp .env.example .env

    read -p "Server ip: " serverip

    echo "APP_URL"
    sed -i "s|APP_URL=http://localhost|APP_URL=https://${domain}|g" .env
    echo "APP_DOMAIN"
    sed -i "s/APP_DOMAIN=localhost/APP_DOMAIN=${domain}/g" .env
    echo "SERVER_IP"
    sed -i "s/SERVER_IP=null/SERVER_IP=${serverip}/g" .env

    read -sp "Database password: " passwddb
    read -p "Database Name: " maindb
    read -sp "Root password: " rootpasswd

    echo "DB"
    sed -i "s/DB_PASSWORD=password/DB_PASSWORD=${passwddb}/g" .env
    sed -i "s/DB_USERNAME=sail/DB_USERNAME=${maindb}/g" .env
    sed -i "s/DB_DATABASE=database/DB_DATABASE=${maindb}/g" .env
    sed -i "s/DB_PORT=33066/DB_PORT=3306/g" .env

    mysql -u root -p${rootpasswd} -e "CREATE DATABASE ${maindb};"
    mysql -u root -p${rootpasswd} -e "CREATE USER ${maindb}@localhost IDENTIFIED BY '${passwddb}';"
    mysql -u root -p${rootpasswd} -e "GRANT ALL PRIVILEGES ON ${maindb}.* TO '${maindb}'@'localhost';"
    mysql -u root -p${rootpasswd} -e "FLUSH PRIVILEGES;"
    mysql -u root -p${rootpasswd} -e "SHOW DATABASES;"
    if ! crontab -l; then
        line="* * * * * cd /var/www/html && php artisan schedule:run >> /dev/null 2>&1"
        (crontab -u $(whoami) -l; echo "$line") | crontab -u $(whoami) -
    fi
fi

php artisan key:generate

php artisan migrate:fresh

php artisan optimize:clear

php artisan app:create $appemail $apppassword $domain

php artisan route:export

php artisan storage:link

npm run build