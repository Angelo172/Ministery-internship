FROM php:8.2-fpm

WORKDIR /var/www/html

# Installer les dépendances système et les extensions PHP nécessaires (openssl, pdo, mysqli, etc.)
RUN apt-get update && apt-get install -y \
    nginx curl libpng-dev libjpeg-dev gnupg \
    && docker-php-ext-install pdo pdo_mysql opcache gd

# Copier le code de l'application
COPY . .

# Installer Composer globalement DANS LE REPERTOIRE BIN STANDARD
RUN curl -sS getcomposer.org | php -- --install-dir=/usr/local/bin --filename=composer

# S'assurer que le chemin d'accès inclut le répertoire de Composer avant de l'exécuter
ENV PATH="/usr/local/bin:${PATH}"

# Installer les dépendances Composer dans le projet
RUN composer install --no-dev --optimize-autoloader

# Configurer Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Exposer le port 80
EXPOSE 80

# Démarrer Nginx et php-fpm
CMD ["nginx", "-g", "daemon off;"]
