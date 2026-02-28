FROM php:8.1-apache

# Установка зависимостей, включая GD и системные пакеты
RUN apt-get update && apt-get install -y \
    unzip zip git curl libzip-dev \
    libjpeg-dev libpng-dev libwebp-dev libfreetype6-dev \
    && docker-php-ext-configure zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install zip gd mysqli pdo pdo_mysql \
    && a2enmod rewrite

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копируем CMS в контейнер
COPY evo/ /var/www/html/

# Устанавливаем права доступа
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Обеспечиваем запись в необходимые папки
RUN mkdir -p /var/www/html/assets/{images,files,backup,.thumbs,export} /var/www/html/bootstrap/cache \
    && chown -R www-data:www-data /var/www/html/assets /var/www/html/bootstrap/cache
