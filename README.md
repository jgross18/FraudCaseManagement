Requirements:

PHP
Composer
Laravel
NPM

Clone 

Composer Install 
Npm Install

Set up .env file to match your database

Create a raw_data folder in the database folder, place CSVs from Kaggle removing the first row of each file

Run php artisan:mirgrate --seed

Tables will be created and data imported
