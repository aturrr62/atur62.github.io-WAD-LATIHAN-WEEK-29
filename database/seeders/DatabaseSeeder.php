<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Item;

class DatabaseSeeder extends Seeder
{
    public function run(): void
{
    // User
    User::create([
        'name' => 'Admin Inventaris',
        'email' => 'admin@inventaris.com',
        'password' => bcrypt('password123'),
    ]);

    // Items
    $items = [
        [
            'nama' => 'Laptop Dell XPS 15',
            'jumlah' => 8,
            'lokasi' => 'Ruang IT',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nama' => 'Proyektor Epson',
            'jumlah' => 5,
            'lokasi' => 'Ruang Meeting',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nama' => 'Printer HP LaserJet',
            'jumlah' => 3,
            'lokasi' => 'Ruang Administrasi',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nama' => 'Kursi Kantor',
            'jumlah' => 50,
            'lokasi' => 'Gudang B',
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'nama' => 'Meja Kerja',
            'jumlah' => 30,
            'lokasi' => 'Gudang A',
            'created_at' => now(),
            'updated_at' => now()
        ]
    ];

    Item::insert($items);
}
}