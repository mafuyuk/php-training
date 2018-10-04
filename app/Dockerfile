FROM php:7.1-fpm

# PHPのインストール
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        openssl \
        libssl-dev \
        libxml2-dev \
    && docker-php-ext-install -j$(nproc) iconv mcrypt pdo_mysql mbstring xml tokenizer zip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd

# mailparseのインストール
RUN pecl install mailparse \
    && docker-php-ext-enable mailparse

# composerのインストール
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer

# Laravelのインストール
RUN apt-get install -y git && composer global require "laravel/installer=~1.1"

WORKDIR /var/www/app