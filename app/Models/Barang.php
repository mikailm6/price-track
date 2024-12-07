<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Barang extends Model
{
    /** @use HasFactory<\Database\Factories\BarangFactory> */
    use HasFactory;

    protected $primaryKey = 'id_barang';

    public function harga(): HasMany
    {
        return $this->hasMany(Harga::class, 'barang_id', 'id_barang');
    }
}
