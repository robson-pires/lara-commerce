# Lara Commerce

A ecommerce make in laravel.

## Install Development

```
cd docker;
docker-compose build;
docker-compose run lara-commerce composer install;
docker-compose run lara-commerce npm install;
cp .env.example .env;
docker-compose run lara-commerce php artisan key:generate;
docker-compose up;
```
