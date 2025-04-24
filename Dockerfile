FROM composer:latest AS composer

# Copy source
WORKDIR /var/www/html
COPY . .

# Cài Composer packages
RUN composer install --optimize-autoloader --no-dev

# Cài Node & build Vite
RUN apt update && apt install -y curl gnupg unzip git npm \
    && npm install \
    && npm run build

# Laravel setup
RUN cp .env.example .env \
    && php artisan key:generate \
    && php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Chạy ứng dụng Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
