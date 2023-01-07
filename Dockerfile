FROM php:7.4-apache

RUN apt-get update && apt-get install -y \
	vim \
    netcat \
    git \
    curl \
	libcurl4-openssl-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install dom curl gd mbstring mysqli pdo_mysql

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

COPY . .

RUN composer self-update --1
RUN composer global require hirak/prestissimo && composer install

CMD [ "sh", "/app/entry.sh" ]