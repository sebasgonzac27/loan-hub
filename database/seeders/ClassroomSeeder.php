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
        $classrooms = [
            ['name' => 'Salón 01', 'campus_id' => 1],
            ['name' => 'Salón 02', 'campus_id' => 1],
            ['name' => 'Salón 03', 'campus_id' => 1],
            ['name' => 'Salón 04', 'campus_id' => 1],
            ['name' => 'Salón 05', 'campus_id' => 1],
            ['name' => 'Salón 06', 'campus_id' => 1],
            ['name' => 'Salón 01', 'campus_id' => 2],
            ['name' => 'Salón 02', 'campus_id' => 2],
            ['name' => 'Salón 03', 'campus_id' => 2],
            ['name' => 'Salón 01', 'campus_id' => 3],
            ['name' => 'Salón 02', 'campus_id' => 3],
            ['name' => 'Salón 04', 'campus_id' => 3],
            ['name' => 'Salón 05', 'campus_id' => 3],
            ['name' => 'Salón 06', 'campus_id' => 3],
            ['name' => 'Salón 07', 'campus_id' => 3],
            ['name' => 'Salón 08', 'campus_id' => 3],
            ['name' => 'Salón 09', 'campus_id' => 3],
            ['name' => 'Salón 10', 'campus_id' => 3],
            ['name' => 'Salón 11', 'campus_id' => 3],
            ['name' => 'Salón 12', 'campus_id' => 3],
            ['name' => 'Salón 13', 'campus_id' => 3],
            ['name' => 'Salón 14', 'campus_id' => 3],
        ];

        foreach ($classrooms as $classroom) {
            Classroom::create($classroom);
        }
    }
}
