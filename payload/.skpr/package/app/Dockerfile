ARG COMPILE_IMAGE=scratch
FROM ${COMPILE_IMAGE} AS build

FROM docker.io/skpr/node:22-v3-latest

COPY --from=build --chown=skpr:skpr /data/.next/standalone /data/.next/standalone
COPY --from=build --chown=skpr:skpr /data/.next/static /data/.next/standalone/.next/static
VOLUME /data/.next/cache

ENV PORT=8080

CMD ["node", "/data/.next/standalone/server.js"]
