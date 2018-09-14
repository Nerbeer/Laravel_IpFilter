# Laravel_IpFilter

Simple Laravel app with some middleware access filtering

## Deploy

```
cd path/to/root
composer install --optimize-autoloader --no-dev
composer dump-autoload -o
touch .env
php artisan key:generate
php artisan migrate --force
php artisan route:cache
php artisan config:cache
```

Configure .env file