<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


## Desc
graphql with laravel for learing purpoce

## Installation
install

run migration

run seeder
```bash
$ composer install
$ php artisan migrate:fresh --seed
```
for testing you can use any graphql client, im using graphiql via browser
```bash
$ php artisan serve
```
## example query
```graphql
query{
    products{
      name
      description
      quantity
  }
}
```
with relationship
```graphql
query{
  user(id:1){
    name
    email
    products{
      name
      description
      quantity
    }
  }
}
```
### screenshot
[screenshot]: https://raw.githubusercontent.com/lordhasyim/graphql-laravel/master/screenshot/sc1.png

# Monggo di paido