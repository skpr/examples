# Payload Example

**This is for demonstration purposes only**

This is an example of how PayloadCMS can be configured to work with the Skpr hosting platform.

## Config

This project uses the [Node Skpr Config](https://github.com/skpr/node-config) package to manage and inject configuration settings into the application — including MongoDB connectivity, secrets, and other environment-specific parameters.

Refer to the [Payload configuration file](./src/payload-types.ts) for guidance on setting up dynamic MongoDB connection strings and managing secrets effectively.

For more examples search the code for references to Skpr eg.

```bash
$ grep -R skpr src/
src/utilities/generatePreviewPath.ts:import skprConfig from '@skpr/config';
src/utilities/generatePreviewPath.ts:    previewSecret: skprConfig.get<string>('payload.preview_secret') || '',
src/utilities/getServerSideURL.ts:import skprConfig from '@skpr/config';
src/utilities/getServerSideURL.ts:  return skprConfig.get<string>('next.public_server_url') || 'http://localhost:3000'
src/collections/Media.ts:import skprConfig from '@skpr/config';
src/collections/Media.ts:    staticDir: skprConfig.get<string>('mount.media') || path.resolve(dirname, '../../public/media'),
src/app/(frontend)/next/preview/route.ts:import skprConfig from '@skpr/config';
src/app/(frontend)/next/preview/route.ts:  if (previewSecret !== skprConfig.get<string>('payload.preview_secret')) {
src/payload.config.ts:import skprConfig from '@skpr/config';
src/payload.config.ts:const mongoHostname = skprConfig.get<string>('mongodb.default.hostname') || 'mongo'
src/payload.config.ts:const mongoPort     = Number(skprConfig.get('mongodb.default.port')) || 27017
src/payload.config.ts:const mongoDatabase = skprConfig.get<string>('mongodb.default.database') || 'local'
src/payload.config.ts:const payloadSecret     = skprConfig.get<string>('payload.secret') || 'NOT_SECRET_CHANGE_ME'
src/payload.config.ts:const payloadCronSecret = skprConfig.get<string>('payload.cron_secret') || 'NOT_SECRET_CHANGE_ME'
```

## Packaging

The Skpr Node Config package requires a NODE_TOKEN to be set to access the Github package repository.

Once setup you can run the following command to package the application.

```bash
$ skpr package --build-arg=NODE_AUTH_TOKEN=${NODE_AUTH_TOKEN} VERSION
```

## Deploy

Then run the command below to deploy!

```bash
# When creating a new environment
$ skpr create ENVIRONMENT VERSION
```

## MongoDB

For now, the following Skpr configs will need to be set:

```bash
$ skpr config set ENVIRONMENT mongo.default.hostname VALUE
$ skpr config set ENVIRONMENT mongo.default.port VALUE
$ skpr config set ENVIRONMENT mongo.default.database VALUE
```
