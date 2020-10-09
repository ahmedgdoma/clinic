#pull image
FROM php:7.4-apache

# start php config
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

#install git
RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git && \
    apt-get install -y vim && \
    apt-get install -y nodejs && \
    apt-get install -y npm



#install php mysql
RUN docker-php-ext-install pdo_mysql

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

#change working directory
WORKDIR /var/www/html


