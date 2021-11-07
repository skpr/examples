FROM skpr/php-cli:7.4-1.x as build

ADD .skpr/package/compile/composer.json composer.json
RUN composer install --prefer-dist

ADD .skpr/package/compile/settings.php app/sites/default/settings.php
ADD .skpr/package/compile/services.yml app/sites/default/services.yml

RUN mkdir /data/config-export

FROM skpr/php-fpm:7.4-1.x as run
COPY --chown=skpr:skpr --from=build /data /data
