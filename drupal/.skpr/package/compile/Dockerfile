FROM skpr/php-cli:8.3-v2-stable AS build

ADD composer.json composer.json
RUN composer install --prefer-dist --no-progress

ADD app/sites/default/settings.php app/sites/default/settings.php
ADD app/sites/default/services.yml app/sites/default/services.yml

RUN mkdir config-export
