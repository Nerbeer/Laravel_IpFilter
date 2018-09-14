# Laravel_IpFilter

Simple Laravel app with some middleware access filtering

## Deploy

```
cd path/to/root
composer install --optimize-autoloader --no-dev
composer dump-autoload -o
touch .env
> Configure .env file
php artisan key:generate
php artisan migrate:fresh
php artisan route:cache
php artisan config:cache
```

