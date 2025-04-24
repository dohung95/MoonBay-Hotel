# Stage 1: Build React với Vite
FROM node:18-alpine AS build

WORKDIR /var/www/html
COPY . .
RUN npm install
RUN npm run build

# Stage 2: Laravel backend
FROM php:8.1-fpm

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    && docker-php-ext-install pdo_mysql

# Copy app từ stage `build`
COPY --from=build /var/www/html /var/www/html

WORKDIR /var/www/html
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
RUN composer install --optimize-autoloader --no-dev
RUN cp .env.example .env
RUN php artisan key:generate

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
