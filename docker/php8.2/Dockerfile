####################################
# PHPDocker.io PHP 7.4 / CLI image #
####################################

FROM ubuntu:focal

ARG USER=php
ARG USER_ID=1000

# Fixes some weird terminal issues such as broken clear / CTRL+L
ENV TERM=linux
ENV TZ=America/Sao_Paulo

ENV PHP_VERSION=8.2
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install Ondrej repos for Ubuntu Bionic, PHP7.4, composer and selected extensions - better selection than
# the distro's packages

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

RUN apt-get update \
    && apt-get install -y --no-install-recommends gnupg \
            wget \
            ca-certificates \
            lsb-release \
            apt-transport-https \
            software-properties-common \
            ca-certificates \
            curl \
            unzip \
    && echo "deb http://ppa.launchpad.net/ondrej/php/ubuntu focal main" > /etc/apt/sources.list.d/ondrej-php.list \
    && apt-key adv --keyserver keyserver.ubuntu.com --recv-keys 4F4EA0AAE5267A6C

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
        php-apcu \
        php-apcu-bc \
        php-xdebug \
        php-imagick \
        php${PHP_VERSION}\
        php${PHP_VERSION}-fpm \
        php${PHP_VERSION}-cli \
        php${PHP_VERSION}-gd \
        php${PHP_VERSION}-curl \
        php${PHP_VERSION}-mbstring \
        php${PHP_VERSION}-opcache \
        php${PHP_VERSION}-readline \
        php${PHP_VERSION}-xml \
        php${PHP_VERSION}-zip \
        php${PHP_VERSION}-mysql \
        php${PHP_VERSION}-pgsql \
        php${PHP_VERSION}-bcmath \
        php${PHP_VERSION}-intl \
        git \
        vim \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


# Install git
RUN composer clear-cache \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* ~/.composer

WORKDIR "/srv/app"

# PHP-FPM packages need a nudge to make them docker-friendly
COPY overrides.conf /etc/php/$PHP_VERSION/fpm/pool.d/z-overrides.conf
RUN update-alternatives --set php /usr/bin/php$PHP_VERSION

# Add local user for same UID linux
RUN useradd -s /bin/bash -u ${USER_ID} ${USER}

CMD ["sh", "-c", "/usr/sbin/php-fpm${PHP_VERSION}", "-O" ]

# Open up fcgi port
EXPOSE 9000
