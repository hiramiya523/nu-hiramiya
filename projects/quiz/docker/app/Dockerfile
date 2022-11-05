FROM php:8.1-fpm

RUN apt-get update \
    && apt-get install -y --no-install-recommends \
            git \ 
            vim \
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
        bcmath \
        opcache

COPY ./php_dev.ini /usr/local/etc/php/php.ini
COPY ./mail.ini /usr/local/etc/php/conf.d/mail.ini
COPY --from=composer:2.4.4 /usr/bin/composer /usr/bin/composer

# sessionファイルディレクトリ
RUN mkdir -pm 707 /etc/php/session && \
    echo  "\n alias ll='ls -la --color\n'" >> /root/.bashrc \
    echo  "\n alias laravel='/root/.composer/vendor/bin/laravel\n'" >> /root/.bashrc

# laravel 高速化対策
RUN mkdir -p /var/www/public_html/${APP_NAME}/storage/framework/cache/data && \
    mkdir -p /var/www/public_html/${APP_NAME}/storage/framework/sessions && \
    mkdir -p /var/www/public_html/${APP_NAME}/storage/framework/views && \
    mkdir -p /var/www/public_html/${APP_NAME}/storage/framework/testing && \
    chmod -R 777 /var/www/public_html/${APP_NAME}/storage

# node 
RUN curl -fsSL https://deb.nodesource.com/setup_current.x | bash - \
    && apt-get install -y nodejs \
    && npm install -g yarn


# mailhog
RUN curl -sSL https://github.com/mailhog/mhsendmail/releases/download/v0.2.0/mhsendmail_linux_amd64 -o mhsendmail \
    && chmod +x mhsendmail \
    && mv mhsendmail /usr/local/bin/mhsendmail

WORKDIR /var/www/public_html