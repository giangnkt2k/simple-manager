<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [];

        for ($i = 1; $i <= 10; $i++) {
            $customers[] = [
                'name' => 'Customer ' . $i,
                'company_name' => 'Company ' . $i,
                'phone' => '09876543' . rand(10, 99),
                'email' => 'customer' . $i . '@example.com',
                'address' => '123 Street ' . $i . ', District ' . rand(1, 10),
                'note' => 'Note for customer ' . $i,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('customers')->insert($customers);
    }

}