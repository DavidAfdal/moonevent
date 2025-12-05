# ============
# 1) STAGE BUILDER
# Builds vendor + node assets
# ============
FROM php:8.2-fpm AS builder

# Install system packages
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libxpm-dev \
    libwebp-dev \
    zlib1g-dev \
    libzip-dev \
    libicu-dev \
    libonig-dev \
    git \
    unzip \
    && docker-php-ext-configure gd \
        --with-freetype \
        --with-jpeg \
        --with-webp \
    && docker-php-ext-install \
        gd pdo pdo_mysql mbstring pcntl exif bcmath zip intl

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Working directory
WORKDIR /var/www

COPY . .

# Composer install (PRODUCTION MODE)
RUN composer install --no-dev --optimize-autoloader --no-progress --prefer-dist

# ============
# 2) STAGE PRODUCTION FINAL IMAGE
# ============
FROM php:8.2-fpm AS production

# Install minimal necessary extensions only
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libicu-dev \
    libzip-dev \
    libfcgi-bin \
    procps \
    && rm -rf /var/lib/apt/lists/*

COPY --from=builder /usr/local/lib/php/extensions/ /usr/local/lib/php/extensions/
COPY --from=builder /usr/local/etc/php/conf.d/ /usr/local/etc/php/conf.d/
COPY --from=builder /usr/local/bin/docker-php-ext-* /usr/local/bin/

WORKDIR /var/www

# Copy from builder stage
COPY --from=builder /var/www /var/www


# Permission for Laravel
RUN chown -R www-data:www-data /var/www

EXPOSE 9000
CMD ["php-fpm"]
