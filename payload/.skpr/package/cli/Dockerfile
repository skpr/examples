ARG COMPILE_IMAGE=scratch
FROM ${COMPILE_IMAGE} AS build

FROM docker.io/skpr/node:22-v3-latest

COPY --chown=skpr:skpr --from=build /data/ /data/
VOLUME /data/.next/cache
VOLUME /tmp

CMD ["bash"]
