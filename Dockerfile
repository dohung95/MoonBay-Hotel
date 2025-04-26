# Stage 1: Build React với Vite
FROM node:18-alpine AS build

WORKDIR /var/www/html
COPY . .
RUN npm install
RUN npm run build

# Stage 2: Laravel backend + cloud-sql-proxy
FROM php:8.1-fpm

# Cài các gói cần thiết
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    && docker-php-ext-install pdo_mysql

# Tải Cloud SQL Proxy
ADD https://storage.googleapis.com/cloud-sql-connectors/cloud-sql-proxy/v2.9.0/cloud-sql-proxy.linux.amd64 /usr/local/bin/cloud-sql-proxy
RUN chmod +x /usr/local/bin/cloud-sql-proxy

# Copy app từ stage build
COPY --from=build /var/www/html /var/www/html

WORKDIR /var/www/html

# Cài Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Cài Laravel dependencies
RUN composer install --optimize-autoloader --no-dev

# Laravel setup
RUN cp .env.example .env
RUN php artisan key:generate
RUN php artisan config:clear && php artisan cache:clear && php artisan config:cache

# Copy start.sh
COPY start.sh /usr/local/bin/start.sh
RUN chmod +x /usr/local/bin/start.sh

# Chạy Laravel qua script khởi động
CMD ["start.sh"]
