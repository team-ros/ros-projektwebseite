#!/bin/bash

service apache2 start
service mysql start

mysql -sfu root < /startup/docker-startup.sh

mysql -e "CREATE DATABASE wordpress"
mysql -e "CREATE USER 'wordpress'@'localhost' IDENTIFIED BY 'ciscocisco'"
mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'wordpress'@'localhost'"

sleep infinity