<?php

namespace Database\Seeders;

use App\Models\Device;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Device::factory()->create([
            'name' => 'Computadora 1',
            'category_id' => 1,
            'campus_id' => 1,
            'status' => 'available'
        ]);

        Device::factory()->create([
            'name' => 'Computadora 2',
            'category_id' => 1,
            'campus_id' => 2,
            'status' => 'in_use'
        ]);
    }
}
