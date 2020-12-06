FROM php:7.2-apache

WORKDIR /var/www/html

COPY . .

RUN docker-php-ext-install mysqli pdo pdo_mysql

RUN chmod -R 777 /var/www/html

EXPOSE 80

