FROM nginx:1.12

ADD ./vhost.conf /etc/nginx/conf.d/default.conf
WORKDIR /var/www