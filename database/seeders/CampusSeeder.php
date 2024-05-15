<?php

namespace Database\Seeders;

use App\Models\Campus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CampusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $campuses = [
            ['name' => 'Villa Campestre'],
            ['name' => 'Victoria'],
            ['name' => 'Príncipe']
        ];

        foreach ($campuses as $campus) {
            Campus::create($campus);
        }
    }
}
