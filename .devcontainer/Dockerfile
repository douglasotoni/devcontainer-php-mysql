FROM php:8.2-fpm

RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip curl nano \
    && docker-php-ext-install mysqli pdo pdo_mysql

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

WORKDIR /var/www/html
