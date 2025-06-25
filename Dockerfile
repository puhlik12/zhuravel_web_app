FROM php:7.4-apache

WORKDIR /var/www/html
COPY . .

RUN chmod 777 -R /var/www/html # Опасные права
EXPOSE 80