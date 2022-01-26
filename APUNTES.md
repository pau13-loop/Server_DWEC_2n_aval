# Apuntes Laravel-PHP

1. Create Laravel project
2. Change dir to project dir
3. Start artisan server to run Laravel app

```php
composer create-project laravel/laravel example-app

cd example-app

php artisan serve
```

Para Limpiar el cache de la conexión a la BD con artisan
`php artisan config:cache`

Para crear migration con artisan
`php artisan migration:install`

Install driver for mysql
`sudo php apt-get install php7.4-mysql`
Install driver for postgres
`sudo apt-get install php-pgsql`

Conexión postgres con php 
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=agenda
DB_USERNAME=admin
DB_PASSWORD=
```

Crear usuario postgres
```
sudo -i -u postgres

psql

sudo -u postgres createuser --interactive
```

Para salir de la BD: `\q`

Ejemplos clase con RAFA:
`create role pllinas createdb login password ''abc123.`;


# Crea un MIDDLEWARE

El recorrido que recorre el MIDDLEWARE sería el siguiente:

> web.php --> Kernel.php --> HelloWorld.php --> Kernel.php --> web.php

Path de los archivos mencionado en el bloque superior:

- web.php (enrutador): routes/web.php
- Kernel.php (conexión middlewars con routers): app/Http/Kernel.php
- HelloWorld.php (middleware):  app/Http/Middleware/HelloWorld.php

# Ejecutar proyecto

Para ejecutar el proyecto laravel a partir de ahora utilizaremos el comando:

`php artisan serve`

Para Crear un Middleware:

`php artisan make:middleware HelloWorld`

# Create controller

Normal:
`php artisan make:controller UserController`

Api: 
`php artisan make:controller api_userController --api`

Resource:
`php artisan make:controller resource_userController --resource`

# PHP Create migration
`php artisan make:migration create_flights_table` 