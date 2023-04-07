FROM php:7.4-apache

# Copy application code into container
COPY . /var/www/html/

# install of vim for an eventuel modification
RUN apt-get update && apt-get install -y vim

# Enable mod_rewrite
RUN a2enmod rewrite


# Install dependencies
# RUN docker-php-ext-install mysqli pdo_mysql

# Expose port
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
