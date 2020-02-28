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


POST Register:
route: http://localhost:8000/api/auth/register

Body formdata:
name: user example
email: user@example.com
password: unc
password_confirmation: unc


Post Request Reset Password:
route: http://localhost:8000/api/auth/recovery

Body formdata:
email: email@example.com


Post Reset Password:
route: http://localhost:8000/api/auth/reset

Body formdata:
email: user@sample.app
password: 12345678
password_confirmation: 12345678
token: 89410a02da590297887c93f258962c99981629b6a009c1ab60f1e316b3fa552d


Post Logout:
route: http://localhost:8000/api/auth/logout


GET Profile:
route: http://localhost:8000/api/profile


PUT Profile Update:
route: http://localhost:8000/api/profile

Body formdata: 
name: Admin User
email: admin@admin.com


PUT Update Password:
route: http://localhost:8000/api/profile/password

Body formdata:
current_password: 12341
new_password: 12345678
new_password_confirmation: 12345678