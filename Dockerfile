FROM php:7.4.26-apache 
RUN docker-php-ext-install mysqli pdo pdo_mysql