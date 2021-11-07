ARG COMPILE_IMAGE=scratch
FROM ${COMPILE_IMAGE} as build

FROM skpr/php-cli:7.4-1.x
COPY --chown=skpr:skpr --from=build /data /data
