#!/bin/bash

# Move to the Laravel project directory
cd /var/www/html

# Run Laravel's scheduler
php artisan schedule:run
