# Deploy

cd path/to/root
composer install --optimize-autoloader --no-dev
composer dump-autoload -o
php artisan migrate --force
php artisan route:cache
php artisan config:cache