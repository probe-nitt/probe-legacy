#!/bin/sh

until nc -z -v -w30 db 3306
do
  echo "Waiting for database connection..."
  # wait for 5 seconds before check again
  sleep 5
done

# echo "\e[34m >>> Generating key \e[97m"
# php artisan key:generate

php artisan config:cache

echo "\e[34m >>> Running migrations \e[97m"
php artisan migrate
if [ $? -eq 0 ]; then
    echo "\e[32m >>> Migration successful \e[97m"
else
    echo "\e[31m >>> Migration failed \e[97m"
    exit 1
fi

echo "\e[34m >>> Seed Data \e[97m"
php artisan db:seed
if [ $? -eq 0 ]; then
    echo "\e[32m >>> Seeding successful \e[97m"
else
    echo "\e[31m >>> Seeding failed \e[97m"
    exit 1
fi

echo "\e[34m >>> Starting the server \e[97m"
php artisan serve --host 0.0.0.0
