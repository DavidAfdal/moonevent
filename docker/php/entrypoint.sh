#!/bin/bash

# Exit immediately if a command exits with a non-zero status
set -e

echo "🚀 Starting Laravel container..."

# Wait for MySQL to be ready (optional tapi recommended)
echo "⏳ Waiting for MySQL..."
until php artisan db:show 2>/dev/null; do
    echo "MySQL is unavailable - sleeping"
    sleep 2
done

echo "✅ MySQL is up!"

# Jalankan migration (optional, sesuaikan kebutuhan)
# php artisan migrate --force

# Buat symlink storage jika belum ada
if [ ! -L /var/www/public/storage ]; then
    echo "🔗 Creating storage symlink..."
    php artisan storage:link
    echo "✅ Storage linked!"
else
    echo "✅ Storage symlink already exists"
fi

# Optimize Laravel (optional)
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "🎉 Laravel is ready!"

# Jalankan PHP-FPM
exec "$@"