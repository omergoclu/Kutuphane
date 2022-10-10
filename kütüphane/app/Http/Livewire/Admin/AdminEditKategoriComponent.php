<?php

namespace App\Http\Livewire\Admin;
use App\Models\Kategori;
use Livewire\Component;
use illuminate\Support\Str;

class AdminEditKategoriComponent extends Component
{
    public $KategoriAdi;
    public $kategori_id;

    public function mount($kategori_id)
    {
        $kategori = Kategori::where('id',$kategori_id)->first();
        $this->KategoriAdi=$kategori->KategoriAdi;
    }
    public function updateKategori()
    {
        $kategori = Kategori::find($this->kategori_id);
        $kategori->KategoriAdi = $this->KategoriAdi;
        $kategori->save();
        session()->flash('message','Kategori Güncellendi');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-kategori-component')->layout('layouts.base');
    }
}
