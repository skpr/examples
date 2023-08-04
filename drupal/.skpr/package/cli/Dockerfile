ARG COMPILE_IMAGE=scratch
FROM ${COMPILE_IMAGE} as build

FROM skpr/php-cli:7.4-1.x
ARG SKPR_VERSION
ENV SKPR_VERSION=$SKPR_VERSION
COPY --chown=skpr:skpr --from=build /data /data
