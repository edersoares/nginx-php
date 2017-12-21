FROM php:fpm

MAINTAINER Eder Soares

RUN apt-get update -y

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug
