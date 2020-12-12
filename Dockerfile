FROM ubuntu:latest

ARG DEBIAN_FRONTEND=noninteractive
ENV TZ=Europe/Berlin
RUN apt update && \
    apt install -y tzdata

RUN apt update && apt install -y \
    apache2 \
    mariadb-server \
    php \
    php-mysql \
    libzip-dev \
    php-zip \
    php-gd \
    php-curl

WORKDIR /var/www/html

RUN rm -rf index.html

COPY ./installer.php .
COPY ./Test_projekt_ros_13864b9e71d848f98002_20201023101014_archive.zip .
COPY ./docker-startup.sh /startup/
COPY ./secure-installation.sql /startup/

RUN chmod -R 777 /var/www/html

CMD ["bash", "/startup/docker-startup.sh"]
