# Serluto

A simple funerary site Based on Laravel 7.0

## Requirements

- Laravel 7.0
- Materialize 1.0.0
- Sweet Alert 2
- PHP >= 7.2.5
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension
- Ctype PHP Extension
- JSON PHP Extension
- BCMath PHP Extension


## Installation

```
git clone
cd blog
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan db:seed
```

If you want dummy data, then run this-

```
php artisan db:seed --class=DummyDataSeeder
```

## API Endpoints

This projects exposes some API endpoints. You could request those endpoints with the `api_token` passed as query parameters, like this- `/api/tags?api_token=YOUR_API_KEY`. You can also pass the token as a Authorization Bearer token. The API key could be obtained from `/api/auth/token` endpoint. Available endpoints are-

```
/api/auth/token
/api/auth/reset-password
/api/auth/change-password

/api/tags
/api/categories
/api/users     // only accessible by admin
/api/posts
```

These endpoints are also available as a [Postman](https://www.postman.com/) collection [here](./Laravel-Blog.postman_collection.json).

## Author

- [Peterson Medeiros](https://github.com/peterfilho)

Based on project:

- [Nuruzzaman Milon](https://milon.im)

Project:  https://github.com/milon
