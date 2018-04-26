FROM nginx:1.12-alpine
COPY src /src
COPY default.conf /etc/nginx/conf.d
EXPOSE 80
