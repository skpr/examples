ARG COMPILE_IMAGE=scratch
FROM ${COMPILE_IMAGE} as build

FROM skpr/nginx-drupal:v2-latest
COPY --chown=skpr:skpr --from=build /data /data
