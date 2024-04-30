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
            'campus_id' => 1,
            'client_id' => 1,
            'program_id' => 1,
            'status' => 'in_course',
            'loan_date' => '2024-04-28',
            'expected_return_date' => '2024-05-28',
            'activity' => 'Actividad 1',
            'classroom_id' => 1,
            'observations' => 'Observacion 1',
            'loaned_by' => 1,
            'received_by' => 1,
        ]);

        Loan::factory()->create([
            'campus_id' => 2,
            'client_id' => 2,
            'program_id' => 2,
            'status' => 'finished',
            'loan_date' => '2024-04-28',
            'expected_return_date' => '2024-05-28',
            'return_date' => '2024-05-28',
            'activity' => 'Actividad 1',
            'classroom_id' => 2,
            'observations' => 'Observacion 1',
            'loaned_by' => 2,
            'received_by' => 2,
        ]);
    }
}
