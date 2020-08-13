#!/bin/bash

SCRIPT_DIR=$(cd $(dirname $0); pwd)

cd ${SCRIPT_DIR}/..

composer install
cp .env.example .env
chmod -R 777 storage/
chmod -R 777 bootstrap/cache/

php artisan key:generate
php artisan storage:link
php artisan migrate

npm install
npm run dev
