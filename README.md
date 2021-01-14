## Nothing Special
crud graphql with laravel for learing purpose, im using this library 
<a href="https://github.com/rebing/graphql-laravel" target="_blank">https://github.com/rebing/graphql-laravel</a>

there are another lib also im considering  <a href="https://github.com/nuwave/lighthouse" target="_blank">https://github.com/nuwave/lighthouse</a>.

next i'll try this one

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
## screenshot

<p align="left"><a href="#"><img src=" https://raw.githubusercontent.com/lordhasyim/graphql-laravel/master/screenshot/sc1.png"></a></p>

# Monggo di paido