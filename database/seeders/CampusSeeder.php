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
        Campus::factory()->create([
            'name' => 'Villa Campestre'
        ]);

        Campus::factory()->create([
            'name' => 'Príncipe'
        ]);
    }
}
