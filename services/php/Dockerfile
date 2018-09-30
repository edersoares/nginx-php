FROM php:7.2-fpm

MAINTAINER Eder Soares

RUN apt-get update -y

RUN apt-get install -y locales
RUN echo "en_US.UTF-8 UTF-8" >> /etc/locale.gen
RUN echo "pt_BR.UTF-8 UTF-8" >> /etc/locale.gen
RUN locale-gen

ENV LANGUAGE=pt_BR.UTF-8
ENV LC_ALL=pt_BR.UTF-8
ENV LC_CTYPE=UTF-8
ENV LANG=pt_BR.UTF-8

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

RUN apt-get install -y libpq-dev

RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install pdo_pgsql

RUN pecl install redis
RUN docker-php-ext-enable redis
RUN rm -rf /tmp/pear

ENV XDEBUG_IDEKEY xdebug
ENV XDEBUG_REMOTE_HOST 127.0.0.1
ENV XDEBUG_REMOTE_PORT 9000
ENV XDEBUG_REMOTE_ENABLE 0

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

COPY php.ini /usr/local/etc/php/php.ini
