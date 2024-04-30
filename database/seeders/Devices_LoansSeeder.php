<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Devices_LoansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('devices_loans')->insert([
            'category_id' => 1,
            'device_id' => 1,
            'loan_id' => 1,
        ]);
        DB::table('devices_loans')->insert([
            'category_id' => 2,
            'device_id' => 2,
            'loan_id' => 2,
        ]);
    }
}
