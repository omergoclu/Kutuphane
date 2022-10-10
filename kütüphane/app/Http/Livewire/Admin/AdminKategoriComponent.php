<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Kategori;
use Livewire\WithPagination;

class AdminKategoriComponent extends Component
{
    use WithPagination;
    public function deleteKategori($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        session()->flash('message','Kategori silindi.');
    }

    public function render()
    {
        $kategoris = Kategori::paginate(5);
        return view('livewire.admin.admin-kategori-component',['kategoris'=>$kategoris])->layout('layouts.base');
    }
}
