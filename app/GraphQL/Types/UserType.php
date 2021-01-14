<?php 
namespace App\GraphQL\Types; 
use App\User; 
use GraphQL\Type\Definition\Type; 
use Rebing\GraphQL\Support\Type as GraphQLType; 
use Rebing\GraphQL\Support\Facades\GraphQL; 
class UserType extends GraphQLType 
{ 
         protected $attributes = [ 
            'name' => 'User',
            'description' => 'Details about a user',
            'model' => User::class
        ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of the User',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the User',
            ],
            'email' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Short description of the User',
            ],
            'password' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The quantity of the User',
            ],
            'products' => [
                'type' => Type::listOf(GraphQL::type('Product')),
                'description' => 'user products',
            ]
        ];
    }

}