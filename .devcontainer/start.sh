#!/bin/sh
cd /var/www/html && docker compose down
cd /var/www/html && /var/www/html/vendor/bin/sail -f devcontainer-docker-compose.yml up -d
