<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InventarisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert dummy data into the 'inventaris' table
        DB::table('inventaris')->insert([
            ['nama_barang' => 'Laptop', 'jumlah' => 10, 'lokasi' => 'Gudang A', 'created_at' => now(), 'updated_at' => now()],
            ['nama_barang' => 'Monitor', 'jumlah' => 5, 'lokasi' => 'Gudang B', 'created_at' => now(), 'updated_at' => now()],
            ['nama_barang' => 'Printer', 'jumlah' => 3, 'lokasi' => 'Gudang C', 'created_at' => now(), 'updated_at' => now()],
        ]);
        
    }
}