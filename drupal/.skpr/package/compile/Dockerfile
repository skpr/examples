FROM skpr/php-cli:8.3-v2-stable AS build

ADD .skpr/package/compile/composer.json composer.json
RUN composer install --prefer-dist

ADD .skpr/package/compile/settings.php app/sites/default/settings.php
ADD .skpr/package/compile/services.yml app/sites/default/services.yml

RUN mkdir /data/config-export
