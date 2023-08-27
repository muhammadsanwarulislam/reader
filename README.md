# Reader
Laravel package for Easy to get report list from different database.

# About
This package only for who need a report list from database a particular table which is independent database server. The package have self controller, config, view and service provider files.

# Installation
The preferred method of installation is via [Packagist][] and [Composer][]. Run the following command to install the package and add it as a requirement to your project's ```composer.json```:
```
composer require centerpoint/reader
```
Latest Laravel versions have auto dicovery and automatically add service providers, however if you're using Laravel 5.4.x and below, remember to add it to ```providers``` array at ```/app/config/app.php```:
```
Centerpoint\Reader\ReaderServiceProvider::class
```
Set those in ```.env``` file
```
DB_CONNECTION=databaseconnectionname
DB_HOST=your_host //127.0.0.1
DB_PORT=your_port //3306
DB_DATABASE=your_database // admindatabase
DB_USERNAME=your_username
DB_PASSWORD=your_password
```
Set those in ```config/database.php``` file
```
'databaseconnectionname' => [
            'driver'        => 'mysql',
            'host'          => env('DB_HOST', '127.0.0.1'),
            'port'          => env('DB_PORT', '3306'),
            'database'      => env('DB_DATABASE', ''),
            'username'      => env('DB_USERNAME', ''),
            'password'      => env('DB_PASSWORD', ''),
            'charset'       => 'utf8',
            'collation'     => 'utf8_unicode_ci',
],
```
After install the package let's configure your db setup, that's menus what type of relation do you want to build for a particular db.
Execute ```composer run-script queryGenerate```

This will ask you some question like

```"What's the table name(like users): "```
You have to enter the table name.

```"What's the table columns(like id, name, email): "```
Enter the table columns with exact same as like the example.




