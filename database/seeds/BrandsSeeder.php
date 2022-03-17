<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brands')->truncate();

        $data = require(database_path() . '/seeds/data/brands.php');

        $brands = [];
        foreach ($data as $brand) {
            $brands[] = [
                'br_name'        => $brand['name'],
                'br_slug'        => Str::slug($brand['name']),
                'br_description' => $brand['description'],
                'br_logo'        => 'brands/' . $brand['logo'],
                'br_status'      => 1,
                'created_at'     => now()
            ];
        }

        DB::table('brands')->insert($brands);
    }
}
