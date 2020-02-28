# UnC API de Autentificação

##### Packages:

* JWT-Auth - [tymondesigns/jwt-auth](https://github.com/tymondesigns/jwt-auth)
* Laravel-CORS [barryvdh/laravel-cors](http://github.com/barryvdh/laravel-cors)

##### Require:
* PHP: ^7.2

## Installation

#### Clone the Repo:
```
#### Install Dependencies

```
$ cd api-unc
$ composer install
```

#### Configure the Environment
Create `.env` file:
```
$ cat .env.example > .env
```
Run `php artisan key:generate` and `php artisan jwt:secret`

#### Migrate and Seed the Database
```
$ php artisan migrate:fresh --seed
```


## Examples


POST Login:
route: http://localhost:8000/api/auth/login

Body formdata:
email: admin@admin.com
password: 1234

