<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Program;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            CampusSeeder::class,
            ClassroomSeeder::class,
            CategorySeeder::class,
            DeviceSeeder::class,
            ProgramSeeder::class,
            ClientSeeder::class,
            LoanSeeder::class,
            Devices_LoansSeeder::class,

        ]);
    }
}
