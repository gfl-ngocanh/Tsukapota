FROM php:7.1-apache
COPY ./docker/php/php.ini /usr/local/etc/php/
COPY ./docker/apache/*.conf /etc/apache2/sites-enabled/

RUN apt-get update && apt-get install -y zlib1g-dev libpq-dev mariadb-client unzip\
  && docker-php-ext-install zip pdo_mysql mysqli \
  && docker-php-ext-enable mysqli

RUN apt-get update && apt-get install -y vim

RUN a2enmod rewrite

RUN service apache2 restart

RUN curl -sS https://getcomposer.org/installer -o composer-setup.php
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer

ENV COMPOSER_ALLOW_SUPERUSER 1

ENV COMPOSER_HOME /composer

ENV PATH $PATH:/composer/vendor/bin

WORKDIR /var/www/html

RUN composer global require "laravel/installer"

