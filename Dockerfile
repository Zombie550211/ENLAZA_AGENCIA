# Imagen para publicar la landing en Render (PHP + Apache)
FROM php:8.3-apache

# Render indica el puerto en la variable PORT; Apache escucha en ese puerto.
# AllowOverride permite que datos/.htaccess bloquee el acceso a las solicitudes.
RUN sed -i 's/Listen 80/Listen ${PORT}/' /etc/apache2/ports.conf \
 && sed -i 's/<VirtualHost \*:80>/<VirtualHost *:${PORT}>/' /etc/apache2/sites-available/000-default.conf \
 && printf '<Directory /var/www/html>\n    AllowOverride All\n</Directory>\nServerName localhost\n' > /etc/apache2/conf-enabled/enlaza.conf

ENV PORT=10000

COPY . /var/www/html/
RUN mkdir -p /var/www/html/datos && chown -R www-data:www-data /var/www/html/datos

EXPOSE 10000
