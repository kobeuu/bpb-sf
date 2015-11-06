## Steps for application first running

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
php artisan migrate
```
- then add some tags, for example:
```
php artisan tinker
$tags = ['personal', 'work', 'food', 'coding'];
foreach($tags as $tag){\App\Tag::create(['name' => $tag]);}
```
