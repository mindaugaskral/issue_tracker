# Use official PHP FPM image
FROM php:8.1-fpm

# Copy our index.php file to the container
COPY index.php /var/www/html/

# Set permissions for the web root
RUN chown -R www-data:www-data /var/www/html

# Expose the FPM port (needed for Nginx to communicate with PHP)
EXPOSE 9000