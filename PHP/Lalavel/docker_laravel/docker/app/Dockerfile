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
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

# sessionファイルディレクトリ
RUN mkdir -pm 777 /etc/php/session && \
    echo  "\n alias ll='ls -la --color\n'" >> /root/.bashrc

# laravel 高速化対策
RUN mkdir -p /var/www/public_html/appli/storage/framework/cache/data && \
    mkdir -p /var/www/public_html/appli/storage/framework/sessions && \
    mkdir -p /var/www/public_html/appli/storage/framework/views && \
    mkdir -p /var/www/public_html/appli/storage/framework/testing && \
    chmod -R 777 /var/www/public_html/appli/storage

# mailhog
RUN curl -sSL https://github.com/mailhog/mhsendmail/releases/download/v0.2.0/mhsendmail_linux_amd64 -o mhsendmail \
    && chmod +x mhsendmail \
    && mv mhsendmail /usr/local/bin/mhsendmail

WORKDIR /var/www/public_html