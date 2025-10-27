FROM docker.io/skpr/node:22-v3-latest AS build

ADD --chown=skpr:skpr . /data

ARG NODE_AUTH_TOKEN

RUN pnpm install
RUN pnpm run build
