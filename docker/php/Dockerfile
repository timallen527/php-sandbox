FROM php:8.4.3-fpm-bookworm

RUN apt-get update \
  && apt-get install unzip

RUN pecl install xdebug-3.4.1 \
  && docker-php-ext-enable xdebug

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY ["config/xdebug.ini", "$PHP_INI_DIR/conf.d"]
