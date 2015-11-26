## Overview


## Installation

- Run command
```
composer install
npm install
```
- then run
```
gulp
```
- setup environment for database. Simple way: open config/database.php, set 'default' => 'sqlite', then run
```
touch storage/database.sqlite
```
- then run migrations
```
php artisan migrate --seed
