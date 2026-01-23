#!/bin/sh
if [ -e .env ]
then
    echo ".env already exists"
else
    echo "Creating .env"
    cp .env.example .env
fi

if [ -e .env.testing ]
then
    echo ".env.testing already exists"
else
    echo "Creating .env.testing"
    cp .env.example .env.testing
fi

if [ -e /var/www/html ]
then
    echo "/var/www/html already exists"
else
    echo "Creating /var/www/html"
    mkdir -p /var/www/html
fi

chown -R 1000:1000 /var/www/html

if [ -e node_modules ]
then
    echo "NodeModules already installed"
else
    if [ -e package-lock.json ]
    then
        npm ci
    else
        npm i --force
    fi
fi

if [ -e .container-docker-initialized.lock ]
then
    echo "Docker already initialized"
else
    echo "Initalizing Docker"
    touch .container-docker-initialized.lock
    docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php83-composer:latest \
    composer install --ignore-platform-reqs
fi
