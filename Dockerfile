FROM php:8.2-apache

# Instala extensões necessárias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Ativa mod_rewrite
RUN a2enmod rewrite

# Define diretório de trabalho
WORKDIR /var/www/html