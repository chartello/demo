<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 500; $i++) {
            User::factory()->create(['created_at' => now()->subDays(rand(0, 90))]);
        }

        for ($i = 0; $i < 200; $i++) {
            User::factory()->create(['created_at' => now()->subDays(rand(0, 45))]);
        }

        for ($i = 0; $i < 238; $i++) {
            User::factory()->create(['created_at' => now()->subDays(rand(0, 15))]);
        }
    }
}
