<?php

namespace App\Livewire;

use App\Models\Barang;
use Livewire\Component;
use Livewire\WithPagination;

class BarangTable extends Component
{
    use WithPagination; 
    protected $paginationTheme = 'bootstrap';
    
    public $search;
    protected $queryString = ['search'];    
    
    public function render()
    {
        return view('livewire.barang-table', [
            'barangs' => Barang::where('nama_barang','like','%'.$this->search.'%')->paginate(5),
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
