#!/usr/bin/env bash

sudo apt install apache2

sudo dpkg -l | grep php | tee packages.txt

sudo add-apt-repository ppa:ondrej/php

sudo apt update

sudo apt install php8.3 php8.2-cli php8.3-{bz2,curl,mbstring,intl}

sudo apt install php8.3-fpm

sudo a2enconf php8.3-fpm

sudo a2enmod rewrite

sudo systemctl restart apache2

sudo apt install mysql-server

sudo service mysql restart

sudo apt-get install php8.3-mysql

sudo apt install composer --no-dev

sudo apt-get install php8.3-xml

sudo apt install npm