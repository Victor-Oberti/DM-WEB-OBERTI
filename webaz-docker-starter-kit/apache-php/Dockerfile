FROM php:8.2-apache

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli

RUN apt-get update && apt-get install -y \
    libpq-dev \
    unzip \
    git \
    && docker-php-ext-install pdo pdo_pgsql pdo_mysql mysqli

    # 

# Activer mod_rewrite
RUN a2enmod rewrite

# Copier le code source
COPY src/ /var/www/html/

# Droits
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
