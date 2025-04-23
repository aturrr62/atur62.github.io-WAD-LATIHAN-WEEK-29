<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user (optional, if you need authentication)
        User::factory()->create([
            'name' => 'Arthur',
            'email' => 'atur.budi1705@gmail.com',
        ]);

        // Call the InventarisSeeder to populate the 'inventaris' table
        $this->call(InventarisSeeder::class);
    }
}