FROM php:7.1-fpm

MAINTAINER Eder Soares

RUN apt-get update -y

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

ENV XDEBUG_IDEKEY xdebug
ENV XDEBUG_REMOTE_HOST 127.0.0.1
ENV XDEBUG_REMOTE_PORT 9000
ENV XDEBUG_REMOTE_ENABLE 0

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

COPY php.ini /usr/local/etc/php/php.ini
