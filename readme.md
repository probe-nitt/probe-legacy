# Probe Website

The website that will contain all information and handle registrations for PROBE 2022. 

## Setup

### Prerequisites

1. Install PHP (Preferably >= 7.0). Finishing the [LAMP stack installation](https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-ubuntu-18-04) with [phpmyadmin installation](https://www.digitalocean.com/community/tutorials/how-to-install-and-secure-phpmyadmin-on-ubuntu-16-04) will help
2. Install [Composer](https://getcomposer.org/download/)
3. Install PHP Extensions (MBString, Ext, Curl, GD, DOM). On Ubuntu for php7.0 you could do ```apt install php7.0-gd php7.0-curl php7.0-ext php7.0-dom```. You may need to uncomment the corresponding lines in your `php.ini` if necessary.

### Project Installation

1. Clone the repo
2. Install dependencies - `composer install`
3. Copy contents of `.env.example` to a new file `.env`
    * Set DB_USERNAME and DB_PASSWORD to your localhost mysql credentials
4. Create API Key - `php artisan key:generate`
5. Create a DB `probe`and change DB_DATABASE in `.env`
6. Run Migrations - `php artisan migrate`
7. Start FestAPI Server - `php artisan serve`
