FROM php:8.3-apache

# Install PHP extensions
RUN docker-php-ext-install \
    mysqli \
    pdo \
    pdo_mysql

# Enable Apache rewrite module
RUN a2enmod rewrite

# Enable .htaccess
RUN sed -ri -e 's/AllowOverride None/AllowOverride All/g' /etc/apache2/apache2.conf

WORKDIR /var/www/html

# Copy application
COPY ./api/ /var/www/html/

# Set permissions
RUN chown -R www-data:www-data /var/www/html