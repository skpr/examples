FROM skpr/proxy-app:v0.0.1

ENV PROXY_APP_CONFIG_KEY_ENDPOINT=elasticsearch.reader.endpoint \
    PROXY_APP_CONFIG_KEY_USERNAME=elasticsearch.reader.username \
    PROXY_APP_CONFIG_KEY_PASSWORD=elasticsearch.reader.password

# This application is meant for responding to requests on the following path.
# This path will be trimmed when connecting to the backend.
ENV PROXY_APP_TRIM_PATH_PREFIX=/api/v1/elasticsearch