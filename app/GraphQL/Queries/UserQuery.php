<?php 
namespace App\GraphQL\Queries; 
use App\User;
use GraphQL\Type\Definition\ResolveInfo; 
use GraphQL\Type\Definition\Type; 
use Rebing\GraphQL\Support\Query; 
use Rebing\GraphQL\Support\Facades\GraphQL;

class UserQuery extends Query 
{ 
    protected $attributes = [ 
     'name' => 'user',
    ];

    public function type(): Type
    {
        return GraphQL::type('User');
    }

    public function args(): array
    {
        return [
            'id' => ['name' => 'id', 'type' => Type::int()],
            'email' => ['name' => 'email', 'type' => Type::string()],
            'first' => ['name' => 'first', 'type' => Type::int()],
        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        $user = new User;

        // check for limit
        if( isset($args['first']) ) {
            $user =  $user->limit($args['first'])->latest('id');
        }

        if(isset($args['id']))
        {
            $user = $user->where('id' , $args['id']);
        }

        if(isset($args['email']))
        {
            $user = $user->where('email', $args['email']);
        }

        return $user->first();
    }
}