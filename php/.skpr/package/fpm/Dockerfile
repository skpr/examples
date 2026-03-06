ARG COMPILE_IMAGE=scratch
FROM ${COMPILE_IMAGE} AS build

FROM skpr/php-fpm:8.5-v2-latest
COPY --chown=skpr:skpr --from=build /data /data
