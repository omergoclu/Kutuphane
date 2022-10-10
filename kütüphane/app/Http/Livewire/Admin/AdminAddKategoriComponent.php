<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use illuminate\Support\Str;
use App\Models\Kategori;


class AdminAddKategoriComponent extends Component
{
    public $KategoriAdi;
    public function addKategori()
    {
        $kategori=new Kategori();
        $kategori->KategoriAdi = $this->KategoriAdi;
        $kategori->save();
        session()->flash('message','Yeni kategori eklendi.');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-kategori-component')->layout('layouts.base');
    }
}
