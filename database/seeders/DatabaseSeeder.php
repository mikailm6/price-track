<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Product::factory()->create([
            'nama_barang' => 'Kucing',
            'jenis_barang' => 'Hewan',
        ]);

        Product::factory()->create([
            'nama_barang' => 'Aqua',
            'jenis_barang' => 'Minuman',
        ]);

        Product::factory()->create([
            'nama_barang' => 'Qtella',
            'jenis_barang' => 'Snack',
        ]);

        Product::factory()->create([
            'nama_barang' => 'Superco',
            'jenis_barang' => 'Snack',
        ]);

        Product::factory()->create([
            'nama_barang' => 'Anjing',
            'jenis_barang' => 'Hewan',
        ]);

        Product::factory()->create([
            'nama_barang' => 'Pocari',
            'jenis_barang' => 'Minuman',
        ]);

        Product::factory()->create([
            'nama_barang' => 'Pudding Susu',
            'jenis_barang' => 'Snack',
        ]);
    }
}
