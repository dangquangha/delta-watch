<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        $data = require(database_path() . '/seeds/data/products.php');

        $products = [];
        foreach ($data as $category) {
            $products[] = [
                'created_at'     => now()
            ];
        }

        DB::table('products')->insert($products);
    }
}
