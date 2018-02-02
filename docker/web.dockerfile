FROM nginx:1.12
ADD ./vhost.conf /etc/nginx/conf.d/default.conf
WORKDIR /var/www

FROM composer/composer:php7
RUN install
WORKDIR /var/www