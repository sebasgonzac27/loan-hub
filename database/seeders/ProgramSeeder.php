<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::factory()->create([
            'code' => 3743,
            'name' => 'Ingeniería de Sistemas'
        ]);

        Program::factory()->create([
            'code' => 3753,
            'name' => 'Ingeniería de Alimentos'
        ]);
    }
}
