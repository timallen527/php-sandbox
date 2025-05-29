FROM php:8.4.3-fpm-bookworm

# For some reason git must be installed for PHPUnit to not complain when the tests are ran.
RUN apt-get update && apt-get install -y git

RUN pecl install xdebug-3.4.1 \
  && docker-php-ext-enable xdebug

COPY ["config/xdebug.ini", "$PHP_INI_DIR/conf.d"]
