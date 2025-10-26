# Blogger

This project was created to perform the best search position in search engines.

You could use this project to advertise your games, apps or even your company.

## Workspace

```
cd /var/www/html
```

## Start Dev Container

```
.devcontainer/start.sh
```

## Local Container


```
docker run -d --name traefik --network traefik_proxy -p 4001:80 -p 8080:8080 -v /var/run/docker.sock:/var/run/docker.sock traefik:latest --providers.docker --api.insecure=true --entrypoints.web.address=:80
```

```
docker compose -f local-docker-compose.yml up -d
```

## Setup Cron Job

```
sudo apt-get update
```

```
sudo apt-get upgrade
```

Get cron

```
sudo apt-get install cron
```

Check status of cron

```
systemctl status cron
```

Open CronTab editor

```
crontab -e
```

Enter following line and change the path to your directory path

```
* * * * * cd /var/www/html && php artisan schedule:run >> /dev/null 2>&1
```
