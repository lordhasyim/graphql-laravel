<?php 
namespace App\GraphQL\Queries; 
use App\Product; 
use GraphQL\Type\Definition\Type; 
use Rebing\GraphQL\Support\Query; 
use Rebing\GraphQL\Support\Facades\GraphQL; 
class ProductQuery extends Query 
{ 
    protected $attributes = [ 
        'name' => 'product',
    ];

    public function type(): Type
    {
        return GraphQL::type('Product');
    }

    public function args(): array
    {
        return [
            'id' => [
                'name' => 'id',
                'type' => Type::int(),
                'rules' => ['required']
            ],
        ];
    }

    public function resolve($root, $args)
    {
        return Product::findOrFail( $args['id']);
    }
}
