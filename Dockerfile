FROM php:7.2-apache

WORKDIR /var/www/html

RUN apt-get update -y && apt-get install -y \
    git \
    sudo \
    unzip \
    libpcre2-dev \
    zlib1g-dev \
    libpng-dev

RUN docker-php-ext-install gd
RUN docker-php-ext-install pdo pdo_mysql zip
RUN docker-php-ext-install bcmath

COPY --chown=www-data:www-data src/* /var/www/html/

RUN chmod -R 777 /var/www/html

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer update
RUN composer require drush/drush

COPY config/apache2/apache2.conf /etc/apache2

COPY docker-entrypoint.sh /
RUN chmod +x /docker-entrypoint.sh

EXPOSE 80

#ENTRYPOINT ["/docker-entrypoint.sh"]