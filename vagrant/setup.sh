#!/bin/bash

if [ $(hostname) != 'vagrant-ubuntu-trusty-64' ]; then
	exit
fi

echo "deb http://repos.zend.com/zend-server/early-access/php7/repos ubuntu/" | tee /etc/apt/sources.list.d/php7.list

apt-get update
apt-get install -y --force-yes vim git php7-nightly apache2

sudo ln -s /usr/local/php7/bin/* /usr/local/bin/

cp /usr/local/php7/libphp7.so /usr/lib/apache2/modules/
cp /usr/local/php7/php7.load /etc/apache2/mods-available/

echo -e "<FilesMatch \.php$>\n\tSetHandler application/x-httpd-php\n</FilesMatch>" | tee /etc/apache2/conf-available/php7.conf

a2dismod mpm_event
a2enmod mpm_prefork
a2enmod php7
a2enconf php7

rm -rf /var/www/html
ln -s /vagrant/www /var/www/html

sudo service apache2 restart

echo "<?php phpinfo();" | tee /var/www/html/index.php

