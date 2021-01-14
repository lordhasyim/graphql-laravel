<?php
namespace App\GraphQL\Mutations;

use App\Product;
use Rebing\GraphQL\Support\Facades\GraphQL;
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Mutation;

class NewProductMutation extends Mutation
{
    protected $attributes = [
        'name' => 'newProduct'  
    ];

    public function type(): Type
    {
        return GraphQL::type('Product');
    }

    public function args(): array
    {
        return [
            'name' => [
                'name' => 'name',
                'type' => Type::nonNull(Type::string())
            ],
            'description' => [
                'name' => 'description',
                'type' => Type::nonNull(Type::string())
            ],
            'quantity' => [
                'name' => 'quantity',
                'type' => Type::nonNull(Type::int())
            ],
            'price' => [
                'name' => 'price',
                'type' => Type::nonNull(Type::float())
            ],
            'model_no' => [
                'name' => 'model_no',
                'type' => Type::nonNull(Type::string())
            ],
            'user_id' => [
                'name' => 'user_id',
                'type' => Type::nonNull(Type::int())
            ],
        ];
    }

    public function resolve($rootValue, array $args)
    {
        $product = new Product();
        $product->fill($args);
        $product->save();

        return  $product;
    }
}