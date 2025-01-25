FROM php:8.1.31-fpm-alpine3.20

LABEL authors="kaveenhyacinth"

RUN apk update && apk add --no-cache \
    git \
    curl \
    zip \
    unzip

WORKDIR /var/www