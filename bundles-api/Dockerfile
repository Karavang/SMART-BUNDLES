FROM php:8.3-cli-alpine

RUN apk add --no-cache \
    bash \
    git \
    zip \
    unzip \
    autoconf \
    build-base \
    libzip-dev \
    sqlite-dev

RUN docker-php-ext-install pdo pdo_sqlite
WORKDIR /var/www/html
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
COPY . .
RUN composer install --no-interaction --no-dev --optimize-autoloader
RUN mkdir -p database && touch database/database.sqlite
RUN chown -R www-data:www-data storage bootstrap/cache database
ENV DB_CONNECTION=sqlite
ENV DB_DATABASE=/var/www/html/database/database.sqlite
EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
