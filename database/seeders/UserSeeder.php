<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $users = [
            [ 'name' => 'Admin', 'email' => 'admin@example.com', 'password' => 'admin'],
            [ 'name' => 'Test', 'email' => 'test@example.com', 'password' => 'test'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
