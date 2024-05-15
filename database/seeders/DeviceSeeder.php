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
        $devices = [
            ['name' => 'Convertidor HDMI a VGA', 'category_id' => 1, 'campus_id' => 1, 'status' => 'damaged'],
            ['name' => 'Cable HDMI', 'category_id' => 2, 'campus_id' => 1],
            ['name' => 'Cable VGA', 'category_id' => 2, 'campus_id' => 1],
            ['name' => 'Portátil HP', 'category_id' => 3, 'campus_id' => 2, 'status' => 'damaged'],
            ['name' => 'Portátil Lenovo', 'category_id' => 3, 'campus_id' => 2],
            ['name' => 'Portátil Dell', 'category_id' => 3, 'campus_id' => 2],
            ['name' => 'Parlante JBL', 'category_id' => 4, 'campus_id' => 3, 'status' => 'damaged'],
            ['name' => 'Parlante Sony', 'category_id' => 4, 'campus_id' => 3],
            ['name' => 'Parlante Bose', 'category_id' => 4, 'campus_id' => 3],
        ];

        foreach ($devices as $device) {
            Device::create($device);
        }
    }
}
