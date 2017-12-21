#!/usr/bin/env bash

# Get the local IP
export XDEBUG_REMOTE_HOST=$(ifconfig | grep 'inet ' | grep -Fv 127.0.0.1 | awk '{print $2}' | head -1)

if [ $# -gt 0 ]; then
    docker-compose "$@"
else
    docker-compose ps
fi