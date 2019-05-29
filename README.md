# callaphysio
This is the Call a Physio(CAP) official website

#Web technology
PHP/Laravel

## Running instruction
-clone into your computer by running `git clone https://github.com/michaelNgiri/callaphysio.git`
--install `npm` and `composer` if not already installed
-install composer dependencies: `composer install`
-install npm dependencies: `npm install`
-create `.env` file in the project' root folder
-copy `.env.example` contents to your newly created `.env` file
-create a MySQL database for the application
-add the database information to `.env` file
-run migration: `php artian migrate`
-seed: `php artisan db:seed`

start the application: `php artisan serve`
 browse to `127.0.0.1:8000` in your browser to view the application

you can stop the application server at any time using `CTRL + C`
