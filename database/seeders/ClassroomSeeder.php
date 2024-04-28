<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Classroom::factory()->create([
            'name' => 'Aula 1',
            'campus_id' => 1
        ]);

        Classroom::factory()->create([
            'name' => 'Aula 2',
            'campus_id' => 2
        ]);
    }
}
