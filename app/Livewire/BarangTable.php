<?php

namespace App\Livewire;

use App\Models\Barang;
use Livewire\Component;

class BarangTable extends Component
{
    public function render()
    {
        return view('livewire.barang-table', [
            'barangs' => Barang::get(),
        ]);
    }
}
