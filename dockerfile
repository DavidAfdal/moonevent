# ============================
# 1. COMPOSER STAGE
# ============================
FROM composer:2 AS composer_stage

WORKDIR /app

COPY composer.json composer.lock ./
RUN composer install --no-dev --optimize-autoloader --prefer-dist --no-scripts

# Copy seluruh source code setelah install vendor
COPY . .


# ============================
# 2. NODE + VITE BUILD STAGE
# ============================
FROM node:18 AS vite_stage

WORKDIR /app

# Copy source + vendor dari composer_stage
COPY --from=composer_stage /app ./

RUN npm install
RUN npm run build


# ============================
# 3. FINAL PRODUCTION STAGE (PHP-FPM)
# ============================
FROM php:8.2-fpm AS app

# Install extension yang dibutuhkan Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    libzip-dev \
    libonig-dev \
    libicu-dev \
    libxml2-dev \
    && docker-php-ext-install pdo_mysql zip intl mbstring exif pcntl bcmath

WORKDIR /var/www

# Copy semua file project dari Composer stage,
# sudah termasuk vendor
COPY --from=composer_stage /app ./

# Copy hasil build Vite
COPY --from=vite_stage /app/public/build ./public/build

# Permission untuk storage & cache
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

EXPOSE 9000
CMD ["php-fpm"]
