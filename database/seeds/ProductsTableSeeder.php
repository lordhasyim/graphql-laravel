<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([ 'name' => 'Mobile',
            'description' => 'This is Mobile Description',
            'quantity' => '4',
            'price' => '25000',
            'model_no' => 'M01',
            'user_id'=>'1'
        ]);

        Product::create([
            'name' => 'Refrigerator',
            'description' => 'This is Refrigerator Description',
            'quantity' => '56',
            'price' => '100000',
            'model_no' => 'R013',
            'user_id'=>'1'
        ]);

        Product::create([
            'name' => 'Headphone',
            'description' => 'This is Headphone Description',
            'quantity' => '44',
            'price' => '5000',
            'model_no' => 'H051',
            'user_id'=>'1'
        ]);

        Product::create([
            'name' => 'TV',
            'description' => 'This is TV Description',
            'quantity' => '34',
            'price' => '62000',
            'model_no' => 'T071',
            'user_id'=>'1'
        ]);

        Product::create([
            'name' => 'Fan',
            'description' => 'This is Fan Description',
            'quantity' => '23',
            'price' => '22000',
            'model_no' => 'F067',
            'user_id'=>'1'
        ]);

        Product::create([
            'name' => 'Laptop',
            'description' => 'This is Laptop Description',
            'quantity' => '64',
            'price' => '50000',
            'model_no' => 'L089',
            'user_id'=>'1'
        ]);
    }
}
