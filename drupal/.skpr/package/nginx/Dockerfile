ARG COMPILE_IMAGE=scratch
FROM ${COMPILE_IMAGE} AS build

FROM skpr/nginx-drupal:v3-stable
COPY --chown=skpr:skpr --from=build /data /data
