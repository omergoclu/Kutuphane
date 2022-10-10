<?php

namespace App\Http\Livewire\Admin;
use App\Models\Kategori;
use App\Models\Kitaplar;
use App\Models\Yazarlar;
use Livewire\Component;
use Livewire\WithFileUploads;
use illuminate\Support\Str;
use Carbon\Carbon;

class AdminAddKitaplarComponent extends Component
{
    use WithFileUploads;
    public $KitapAdi;
    public $Url;
    public $BarkodNo;
    public $SayfaSayisi;
    public $SatisFiyati;
    public $image;
    public $kategori_id;
    public $yazar_id;

    public function addKitaplar()
    {
        $kitaplar = new Kitaplar();
        $kitaplar->KitapAdi=$this->KitapAdi;
        $kitaplar->Url=$this->Url;
        $kitaplar->BarkodNo=$this->BarkodNo;
        $kitaplar->SayfaSayisi=$this->SayfaSayisi;
        $kitaplar->SatisFiyati=$this->SatisFiyati;
        $kitaplar->kategori_id=$this->kategori_id;
        $kitaplar->yazar_id=$this->yazar_id;
        $imageName = Carbon::now()->timestamp.'.'. $this->image->extension();
        $this->image->storeAs('kitaplars',$imageName);
        $kitaplar->image= $imageName;
        $kitaplar->save();
        session()->flash('message','yeni kitap eklendi');

    }
    public function render()
    {
        $kategoris= Kategori::all();
        $yazarlars= Yazarlar::all();
        return view('livewire.admin.admin-add-kitaplar-component',['kategoris'=>$kategoris],['yazarlars'=>$yazarlars])->layout('layouts.base');
    }
}
