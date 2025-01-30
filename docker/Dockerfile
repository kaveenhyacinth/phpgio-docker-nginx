FROM php:8.1.31-fpm-alpine3.20

LABEL authors="kaveenhyacinth"

RUN apk update && apk add --no-cache \
    git \
    curl \
    zip \
    unzip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www