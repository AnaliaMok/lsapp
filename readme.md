# Laravel Series App
This is just a project following Traversy Media's Laravel tutorial series.
There may be additional features included for testing purposes.

## Project Setup
1. Create a vhost directing to the `public` folder
2. Run `composer install` from root directory of project
3. Run `npm install` from root directory.
4. Create a .env file by duplicating and/or just renaming the `.env.example` file to just `.env`
5. Generate a new API key by running `php artisan key:generate` and use this new key within you .env file's APP_KEY variable
6. Create a database of your choosing: as long as it's supported by laravel
7. Add you database name and credentials to the .env file
8. NOTE: If you are not using a mysql database, go to `config/database.php` and change the default connector type on line 16
9. Next, run `php artisan migrate` to create your databases
10. Next run `php artisan auth` to allow for user authentication. (Is required)
