<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->truncate();

        $data = require(database_path() . '/seeds/data/customers.php');

        $customers = [];
        foreach ($data as $customer) {
            $customers[] = [
                'name'     => $customer['name'],
                'email'    => $customer['email'],
                'password' => bcrypt($customer['password']),
                'created_at' => now()
            ];
        }

        DB::table('customers')->insert($customers);
    }
}
