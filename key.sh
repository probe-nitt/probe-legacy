#!/bin/sh

key=$(cat /proc/sys/kernel/random/uuid | sed 's/[-]//g' | head -c 32; echo)
sed -i "s/APP_KEY=.*/APP_KEY=$key/g" "./.env"

echo Application key [$key] set successfully
