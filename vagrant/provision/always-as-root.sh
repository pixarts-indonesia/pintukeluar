#!/usr/bin/env bash

source /app/vagrant/provision/common.sh

#== Provision script ==

echo "Provision-script user: `whoami`"

echo "Restart web-stack"
sudo service php8.1-fpm restart
sudo service nginx restart
sudo service mysql restart
