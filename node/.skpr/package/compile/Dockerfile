FROM skpr/node:24-v3-latest

ADD --chown=skpr:skpr . /data
RUN pnpm run build
