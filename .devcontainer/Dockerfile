FROM php:8.2-fpm

# Atualizando e instalando ferramentas uteis no container
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip curl nano \
    && docker-php-ext-install mysqli pdo pdo_mysql

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

# Instalando composer do PHP
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/html
