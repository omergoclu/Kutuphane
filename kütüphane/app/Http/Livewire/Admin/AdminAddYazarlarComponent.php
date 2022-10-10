<?php

namespace App\Http\Livewire\Admin;
use illuminate\Support\Str;
use App\Models\Yazarlar;
use Livewire\Component;

class AdminAddYazarlarComponent extends Component
{
    public $YazarAdi;
    public $YazarSoyadi;
    public $Yasi;
    public $DogumTarihi;
    public $OlumTarihi;
    public function addYazarlar()
    {
        $yazarlar=new Yazarlar();
        $yazarlar->YazarAdi = $this->YazarAdi;
        $yazarlar->YazarSoyadi = $this->YazarSoyadi;
        $yazarlar->Yasi = $this->Yasi;
        $yazarlar->DogumTarihi = $this->DogumTarihi;
        $yazarlar->OlumTarihi = $this->OlumTarihi;
        $yazarlar->save();
        session()->flash('message','Yeni Yazar eklendi.');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-yazarlar-component')->layout('layouts.base');
    }
}
