FROM nginx

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

COPY default.conf /etc/nginx/conf.d/default.conf
