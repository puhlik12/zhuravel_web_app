FROM php:8.2-apache

RUN apt-get update && apt-get install -y sqlite3

COPY . /var/www/html/

RUN sqlite3 /var/www/html/database.db "CREATE TABLE users (id INTEGER PRIMARY KEY AUTOINCREMENT, username TEXT, password TEXT);"

RUN chown -R www-data:www-data /var/www/html/
RUN chmod 755 /var/www/html/database.db

RUN a2enmod rewrite

CMD ["apache2-foreground"]