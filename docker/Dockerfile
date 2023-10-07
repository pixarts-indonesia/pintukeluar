# Gunakan image Ubuntu sebagai image dasar
FROM ubuntu:22.04

# Instalasi PHP dan dependensi PHP dari PPA Ondřej Surý
RUN apt-get update && apt-get install -y software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get update && apt-get install -y \
    php8.1-fpm \
    php8.1-mysql \
    php8.1-mbstring \
    php8.1-gd \
    php8.1-xml \
    php8.1-zip \
    php8.1-curl \
    php8.1-redis \
    php8.1-bcmath

# Instalasi Node.js versi LTS (contoh: 14.x)
RUN apt-get install -y curl && curl -fsSL https://deb.nodesource.com/setup_14.x | bash -
RUN apt-get install -y nodejs
RUN npm install -g npm@latest

# Instalasi Composer
RUN apt-get update -y
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Konfigurasi direktori kerja
WORKDIR /app

# Instalasi dependensi tambahan jika diperlukan
RUN apt-get install -y \
    git \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libmcrypt-dev \
    libgd-dev \
    jpegoptim optipng pngquant gifsicle \
    libonig-dev \
    zip \
    sudo \
    unzip

# Salin konten proyek ke dalam kontainer
COPY . /app

# Setel hak akses untuk pengguna www-data
RUN chown -R www-data:www-data /app

# Perintah untuk menjalankan PHP-FPM
CMD ["php-fpm"]
