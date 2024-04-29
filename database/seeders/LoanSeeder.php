<?php

namespace Database\Seeders;

use App\Models\Loan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Loan::factory()->create([
            'client_id' => 1,
            'program_id' => 1,
            'status' => 'Prestado',
            'loan_date' => '2024-04-28',
            'return_date' => '2024-05-28',
            'activity' => 'Actividad 1',
            'classroom_id' => 1,
            'observations' => 'Observacion 1',
            'User_id' => 1,
            'User_id_return' => 1,
        ]);

        Loan::factory()->create([
            'client_id' => 2,
            'program_id' => 2,
            'status' => 'Devuelto',
            'loan_date' => '2024-04-28',
            'return_date' => '2024-05-28',
            'activity' => 'Actividad 2',
            'classroom_id' => 2,
            'observations' => 'Observacion 2',
            'User_id' => 2,
            'User_id_return' => 2,
        ]);
    }
}
