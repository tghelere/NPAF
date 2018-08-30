FROM wordpress

COPY wp-config.php /var/www/html/
COPY .env /var/www/html/
COPY vendor/ /var/www/html/vendor/