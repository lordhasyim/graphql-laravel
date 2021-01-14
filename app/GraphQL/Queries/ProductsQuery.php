<?php 
namespace App\GraphQL\Queries; 
use App\Product;  
use GraphQL\Type\Definition\Type;
use Rebing\GraphQL\Support\Query; 
use Rebing\GraphQL\Support\Facades\GraphQL; 
class ProductsQuery extends Query 
{ 
    protected $attributes = [ 
        'name' => 'products',
    ];

    public function type(): Type
    {
        return Type::listOf(GraphQL::type('Product'));
    }

    public function resolve($root, $args)
    {
        return Product::all();
    }
}
