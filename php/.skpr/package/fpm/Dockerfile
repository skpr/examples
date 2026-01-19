ARG COMPILE_IMAGE=scratch
FROM ${COMPILE_IMAGE} as build

FROM skpr/php-fpm:8.4-v2-latest
COPY --chown=skpr:skpr --from=build /data /data
