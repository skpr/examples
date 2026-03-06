FROM skpr/php-cli:8.5-v2-latest AS build

RUN mkdir app && chown skpr:skpr app
ADD composer.json /data/app/composer.json
RUN cd app && composer dump-autoload

ADD --chown=skpr:skpr . /data/app
