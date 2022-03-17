<?php

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        $data = require(database_path() . '/seeds/data/categories.php');

        $categories = [];
        foreach ($data as $category) {
            $categories[] = [
                'cat_name'      => $category['name'],
                'cat_slug'      => Str::slug($category['name']),
                'cat_parent_id' => $category['parent_id'],
                'cat_status'    => 1,
                'created_at'    => now()
            ];
        }

        DB::table('categories')->insert($categories);
    }
}
