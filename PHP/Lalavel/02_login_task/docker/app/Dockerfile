FROM php:8.0-fpm

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
            git \ 
            unzip \ 
            libzip-dev \
            libicu-dev \
            libonig-dev \
    && apt-get clean  \
    && rm -rf /var/lib/apt/lists* \
    && docker-php-ext-install \
        intl \
        pdo_mysql \
        zip \
        bcmath

COPY ./php_dev.ini /usr/local/etc/php/php.ini
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

# sessionファイルディレクトリ
RUN mkdir -pm 777 /etc/php/session && \
    echo -e "\n alias ll='ls -la --color\n'" >> /root/.bashrc

WORKDIR /app