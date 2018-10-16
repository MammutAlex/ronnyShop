#!/usr/bin/env bash

sed -i "s/xdebug\.remote_host\=.*/xdebug\.remote_host\=$XDEBUG_HOST/g" /etc/php/7.2/mods-available/xdebug.ini
sed -i "s/xdebug\.remote_host\=.*/xdebug\.idekey\=$XDEBUG_IDEKEY/g" /etc/php/7.2/mods-available/xdebug.ini
sed -i "s/xdebug\.remote_host\=.*/xdebug\.port\=$XDEBUG_PORT/g" /etc/php/7.2/mods-available/xdebug.ini

##
# Ensure /.composer exists and is writable
#
if [ ! -d /.composer ]; then
    mkdir /.composer
fi

chmod -R ugo+rw /.composer

##
# Run a command or start supervisord
#
if [ $# -gt 0 ];then
    # If we passed a command, run it
    exec "$@"
else
    # Otherwise start supervisord
    /usr/bin/supervisord
fi
