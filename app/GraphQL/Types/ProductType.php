<?php 
namespace App\GraphQL\Types;
use App\Product; 
use GraphQL\Type\Definition\Type; 
use Rebing\GraphQL\Support\Type as GraphQLType; 

class ProductType extends GraphQLType 
{ 
    protected $attributes = [ 
        'name' => 'Product',
        'description' => 'Details about a product',
        'model' => Product::class
    ];

    public function fields(): array
    {
        return [
            'id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'Id of the product',
            ],
            'name' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The name of the product',
            ],
            'description' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'Short description of the product',
            ],
            'quantity' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The quantity of the product',
            ],
            'price' => [
                'type' => Type::nonNull(Type::float()),
                'description' => 'The price the product',
            ],
            'model_no' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'The model no of the product',
            ],
            'user_id' => [
                'type' => Type::nonNull(Type::int()),
                'description' => 'The user_id of the product',
            ]
        ];
    }
}