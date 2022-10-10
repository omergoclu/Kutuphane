<?php

namespace App\Http\Livewire\Admin;
use App\Models\Yazarlar;
use Livewire\Component;
use illuminate\Support\Str;

class AdminEditYazarlarComponent extends Component
{
    public $YazarAdi;
    public $YazarSoyadi;
    public $Yasi;
    public $DogumTarihi;
    public $OlumTarihi;
    public $yazar_id;


    public function mount($yazar_id)
    {
        $yazarlar = Yazarlar::where('id',$yazar_id)->first();
        $this->YazarAdi=$yazarlar->YazarAdi;
        $this->YazarSoyadi=$yazarlar->YazarSoyadi;
        $this->Yasi=$yazarlar->Yasi;
        $this->DogumTarihi=$yazarlar->DogumTarihi;
        $this->OlumTarihi=$yazarlar->OlumTarihi;
    }
    public function updateYazarlar()
    {
        $yazarlar = Yazarlar::find($this->yazar_id);
        $yazarlar->YazarAdi = $this->YazarAdi;
        $yazarlar->YazarSoyadi = $this->YazarSoyadi;
        $yazarlar->Yasi = $this->Yasi;
        $yazarlar->DogumTarihi = $this->DogumTarihi;
        $yazarlar->OlumTarihi = $this->OlumTarihi;
        $yazarlar->save();
        session()->flash('message','Yazar Güncellendi');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-yazarlar-component')->layout('layouts.base');
    }
}
