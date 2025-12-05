#############################################
# Stage 1: BUILDER
# Build vendor + PHP extensions
#############################################
FROM php:8.2-cli AS builder

# Install system dependencies for PHP extensions
# Install system packages
RUN apt-get update \
    && apt-get install -y \
        build-essential \
        pkg-config \
        libpng-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libzip-dev \
        libxml2-dev \
        libonig-dev \
        curl \
        unzip \
        git

# Install PHP extensions (with GD fix)
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        gd \
        pdo_mysql \
        mbstring \
        exif \
        pcntl \
        bcmath \
        zip \
        intl


# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER=1

WORKDIR /var/www

# Copy composer files
# Copy full source code
COPY . .


# Install vendor (no dev)
RUN composer install --no-dev --prefer-dist --no-progress --optimize-autoloader


#############################################
# Stage 2: WORKSPACE (Final Runtime)
# Lightweight PHP CLI runtime for development
#############################################
FROM php:8.2-cli

# Install minimal runtime dependencies
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


CMD ["bash"]
