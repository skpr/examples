ARG COMPILE_IMAGE=scratch
FROM ${COMPILE_IMAGE} AS build

FROM skpr/php-cli:8.3-v2-latest
ARG SKPR_VERSION
ENV SKPR_VERSION=$SKPR_VERSION
COPY --chown=skpr:skpr --from=build /data /data
