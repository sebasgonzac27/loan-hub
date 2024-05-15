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
        $programs = [
            ['code' => 3743, 'name' => 'Ingeniería de Sistemas'],
            ['code' => 3753, 'name' => 'Ingeniería de Alimentos'],
            ['code' => 3845, 'name' => 'Administración de Empresas'],
            ['code' => 3841, 'name' => 'Contaduría Pública'],
        ];

        foreach ($programs as $program) {
            Program::create($program);
        }
    }
}
