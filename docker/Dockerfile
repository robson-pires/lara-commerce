FROM php:7.2
MAINTAINER Roger Russel <rrussel@allin.com.br>

ENV TERM=xterm
ENV TZ=America/Sao_Paulo
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN ln -s /app/vendor/bin/codecept /usr/bin/

WORKDIR /app/

RUN apt-get update && apt-get install -y \
 libpq-dev \
 git \
 zip \
 unzip \
 gnupg \
 build-essential \
 && rm -rf /var/lib/apt/lists/*

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"
RUN chmod +x /usr/local/bin/composer

RUN docker-php-ext-install \
   pdo_mysql

RUN pecl install xdebug \
   && docker-php-ext-enable xdebug

RUN curl -sL https://deb.nodesource.com/setup_10.x | bash

RUN apt-get update && apt-get install -y \
 nodejs \
 && rm -rf /var/lib/apt/lists/*

CMD ["tail", "-f", "/dev/null"]
