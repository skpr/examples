ARG COMPILE_IMAGE=scratch
FROM ${COMPILE_IMAGE} as build

FROM skpr/node:16-1.x

USER root
RUN npm install -g serve
USER skpr

# Allows serve to run with read only containers.
VOLUME /tmp

COPY --chown=skpr:skpr --from=build /data/build /data/build

CMD ["serve", "-s", "build", "-l", "8080"]