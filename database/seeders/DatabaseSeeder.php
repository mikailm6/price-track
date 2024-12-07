<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\Harga;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Barang::factory()->create([
            'nama_barang' => 'Kucing',
            'jenis_barang' => 'Hewan',
        ]);

        Harga::factory()->create([
            'barang_id' => 1,
            'harga_barang' => 10000,
            'tempat_barang' => 'Indomaret',
        ]);

        Harga::factory()->create([
            'barang_id' => 1,
            'harga_barang' => 15000,
            'tempat_barang' => 'Alfamart',
        ]);

        Barang::factory()->create([
            'nama_barang' => 'Aqua',
            'jenis_barang' => 'Minuman',
        ]);

        Harga::factory()->create([
            'barang_id' => 2,
            'harga_barang' => 5000,
            'tempat_barang' => 'Indomaret',
        ]);

        Harga::factory()->create([
            'barang_id' => 2,
            'harga_barang' => 4500,
            'tempat_barang' => 'Alfamart',
        ]);

        Barang::factory()->create([
            'nama_barang' => 'Qtella',
            'jenis_barang' => 'Snack',
        ]);

        Harga::factory()->create([
            'barang_id' => 3,
            'harga_barang' => 20000,
            'tempat_barang' => 'Indomaret',
        ]);

        Harga::factory()->create([
            'barang_id' => 3,
            'harga_barang' => 18000,
            'tempat_barang' => 'Alfamart',
        ]);
    }
}
