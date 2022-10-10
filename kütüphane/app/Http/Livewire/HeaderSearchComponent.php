<?php

namespace App\Http\Livewire;
use App\Models\Kategori;

use Livewire\Component;

class HeaderSearchComponent extends Component
{
    public $search;
    public $kitaplar_kate;
    public $kitaplar_kate_id;

    public function mount()
    {
        $this->kitaplar_kate="Tüm Kategoriler";
        $this->fill(request()->only('search','kitaplar_kate','kitaplar_kate_id'));

    }
    public function render()
    {
        $kategoris = Kategori::all();
        return view('livewire.header-search-component',['kategoris'=>$kategoris]);
    }
}
