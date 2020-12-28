# # Laradock 8 Environment Setup with voyager 

This Environment is enable 
* hybrid databse: mysql, mongo,
* Admin plaftorm : Laravel voyager 

Laravel 8.x 
- https://laravel.com/docs/8.x/

Laradock
- https://laradock.io/

Voyager
- https://github.com/the-control-group/voyager

# Folder structure
- /data  ## Your database Data  
- /data/mongo
- /data/mysql
- /laradock ## enviroment
- /www ## the laravel 8

# Check out with the submodule
git clone --recursive https://github.com/melcshum/LaradockEnvSetup.git

#Setup Development Environment
## Create .env file under laradock
```
cp env-example .env
```

## Edit laradock/.env 
```
# Point to the path of your applications code on your host
APP_CODE_PATH_HOST=../www/
 
# Choose storage path on your machine. For all storage systems
DATA_PATH_HOST=../data

# Define the prefix of container names. This is useful if you have multiple projects that use laradock to have separate containers per project.
COMPOSE_PROJECT_NAME=hybrid-laradock

### NGINX #################################################
NGINX_HOST_HTTP_PORT=8000
NGINX_HOST_HTTPS_PORT=4430
```
# Setup up nginx
Assume it is running localhost

## Create a config for nginx  

```
cp -r nginx/sites/laravel.conf.example nginx/sites/localhost.conf
```

## Update localhost.conf

```
server_name localhost;
root /var/www/public
```

# Setup Laravel Project Setting

## create .env file under www folder
```
cp .env.example .env
```

# Update Laravel project setting

# Setup Mysql DB as default

```
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=default
DB_USERNAME=default
DB_PASSWORD=secret

```


## Setup MongoDB as second DB 

add mongo setting in .env under www folder
 
```
MONGO_DB_HOST=mongo
MONGO_DB_PORT=27017
MONGO_DB_DATABASE=database
```

### add config\databse.php
```
        'mongodb' => [
            'driver'   => 'mongodb',
            'host'     => env('MONGO_DB_HOST', 'localhost'),
            'port'     => env('MONGO_DB_PORT', 27017),
            'database' => env('MONGO_DB_DATABASE', 'database'),
            'username' => '',
            'password' => '',
            'options'  => [
                'database' => '',
            ]
        ],
```

To use mongo, Specify connection name in the scheme 
Fore example
```
public function up()
{
Schema::connection('mongodb')->table('test', function (Blueprint $collection) {
    $collection->index([ "id" => "1234" ]);
});
}
```



# Setup Laravel voyager admin platform


```
composer require tcg/voyager
```

```
php artisan voyager:install --with-dummy
```

- email: admin@admin.com
- password: password



# Development
```
cd laradock
docker-compose up -d nginx mysql phpmyadmin mongo
```

```
docker-compose exec workspace bash
```


## Start laravel  

clean up all compiled files and their paths.
```
composer install
php artisan key:generate
php artisan config:cache

composer dump-autoload
```

## To fix the  php artisan db issue
in .env file under laravel folder
``` 
WORKSPACE_INSTALL_MYSQL_CLIENT=true
```

```
docker-compose build workspace php-fpm
```

## To enable display error

Update

php-fpm/php7.3.ini 
```
display_errors=On
```

php-fpm/laravel.ini 
```
display_errors=On
```


```
docker-compose build workspace php-fpm
```

