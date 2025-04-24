# Bắt đầu từ image Node.js chính thức
FROM node:18-alpine as build

# Cài đặt các công cụ hệ thống cần thiết
RUN apk add --no-cache curl git bash

# Copy source code vào container
WORKDIR /var/www/html
COPY . .

# Cài đặt Node packages và build ứng dụng React với Vite
RUN npm install
RUN npm run build

# Cài đặt PHP (sử dụng image chính thức của PHP)
FROM php:8.1-fpm

# Cài Composer và các package cần thiết cho PHP
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy ứng dụng Laravel từ build image sang
COPY --from=build /var/www/html /var/www/html

# Cài các package của PHP cần thiết
WORKDIR /var/www/html
RUN composer install --optimize-autoloader --no-dev

# Cài đặt .env nếu chưa có và tạo key Laravel
RUN cp .env.example .env
RUN php artisan key:generate

# Chạy ứng dụng Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
