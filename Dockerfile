FROM php:8.2-fpm

WORKDIR /var/www/html

# Installer les dépendances système et les extensions PHP nécessaires (openssl, pdo, mysqli, etc.)
RUN apt-get update && apt-get install -y \
    nginx curl libpng-dev libjpeg-dev \
    && docker-php-ext-install pdo pdo_mysql opcache gd

# Copier le code de l'application D'ABORD
COPY . .

# --- Installer Composer ET les dépendances du projet DANS LA MÊME ÉTAPE RUN ---
RUN curl -sS getcomposer.org | php -- --install-dir=/usr/local/bin --filename=composer \
    && composer install --no-dev --optimize-autoloader
# --- Fin étape combinée ---

# Configurer Nginx
COPY nginx.conf /etc/nginx/nginx.conf

# Exposer le port 80
EXPOSE 80

# Démarrer Nginx et php-fpm
CMD ["nginx", "-g", "daemon off;"]
