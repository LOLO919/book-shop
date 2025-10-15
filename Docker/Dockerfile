FROM php:8.3-fpm-alpine3.17
LABEL authors="LOLO919"

RUN apk add --no-cache \
    npm \
    curl \
    bash \
    nano \
    $PHPIZE_DEPS \
    libzip-dev \
    libxml2-dev \
    icu \
    icu-dev \
    mysql-client \
    && docker-php-ext-install zip

RUN apk add libpng-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer \

RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    intl \
    zip \
    soap \
    bcmath \
    exif

RUN set -ex \
    && apk add --no-cache --virtual .build-deps $PHPIZE_DEPS \
    && docker-php-ext-install pdo_mysql \
    && apk del .build-deps

RUN docker-php-ext-enable pdo_mysql
