## Ilkomedia

Ilkomedia adalah Social Media untuk mahasiswa Fakultas Ilmu Komputer Universitas Jember

## Development Resource
- [Laravel 5.4](https://laravel.com/docs/5.4)
- [DevDojo/Chatter](https://github.com/thedevdojo/chatter)
- [Friend Finder Web Template](http://mythemestore.com/friend-finder)

## How to use

```
composer require "devdojo/chatter=0.2.*"

//tambahkan di array providers dalam file config/config.php
DevDojo\Chatter\ChatterServiceProvider::class,

php artisan vendor:publish --provider="DevDojo\Chatter\ChatterServiceProvider"

composer dump-autoload

php artisan migrate

php artisan db:seed --class=ChatterTableSeeder
```


