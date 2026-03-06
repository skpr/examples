FROM skpr/php-cli:8.5-v2-latest AS build

ADD composer.json composer.json
RUN composer dump-autoload

ADD --chown=skpr:skpr . /data/app
