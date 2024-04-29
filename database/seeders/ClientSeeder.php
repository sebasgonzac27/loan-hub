<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Client::factory()->create([
            'code' => '001',
            'name' => 'Client1',
            'email' => "Client@example.com"
        ]);

        Client::factory()->create([
            'code' => '002',
            'name' => 'Client2',
            'email' => "Client2@example.com"
        ]);
    }
}
