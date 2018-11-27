#!/usr/bin/env bash

echo "xdebug.idekey=$XDEBUG_IDEKEY" >> /etc/php/7.2/mods-available/xdebug.ini
echo "xdebug.port=$XDEBUG_PORT" >> /etc/php/7.2/mods-available/xdebug.ini
echo "xdebug.remote_host=$XDEBUG_HOST" >> /etc/php/7.2/mods-available/xdebug.ini

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
