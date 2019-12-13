FROM php:7.2
RUN mkdir /app
WORKDIR /app
COPY . .
CMD php -S 0.0.0.0:80
