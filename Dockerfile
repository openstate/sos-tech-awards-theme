FROM node:15.8.0-alpine
MAINTAINER Open State Foundation <developers@openstate.eu>

RUN apk add libjpeg-turbo libjpeg-turbo-dev libpng libpng-dev pkgconfig autoconf automake libtool nasm build-base zlib-dev
