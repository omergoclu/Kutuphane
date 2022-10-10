<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Kitaplar;
use App\Models\Kategori;
use App\Models\Yazarlar;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditKitaplarComponent extends Component
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
    public $newimage;
    public $kitap_id;

    public function mount($kitap_id)
    {
        $kitaplar = Kitaplar::where('id',$kitap_id)->first();
        $this->KitapAdi=$kitaplar->KitapAdi;
        $this->Url=$kitaplar->Url;
        $this->BarkodNo=$kitaplar->BarkodNo;
        $this->SayfaSayisi=$kitaplar->SayfaSayisi;
        $this->SatisFiyati=$kitaplar->SatisFiyati;
        $this->image=$kitaplar->image;
        $this->kategori_id=$kitaplar->kategori_id;
        $this->yazar_id=$kitaplar->yazar_id;
    }

    public function updateKitaplar()
    {
        $kitaplar =Kitaplar::find($this->kitap_id);
        $kitaplar->KitapAdi=$this->KitapAdi;
        $kitaplar->Url=$this->Url;
        $kitaplar->BarkodNo=$this->BarkodNo;
        $kitaplar->SayfaSayisi=$this->SayfaSayisi;
        $kitaplar->SatisFiyati=$this->SatisFiyati;
        $kitaplar->kategori_id=$this->kategori_id;
        $kitaplar->yazar_id=$this->yazar_id;
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp.'.'. $this->newimage->extension();
            $this->newimage->storeAs('kitaplars',$imageName);
            $kitaplar->image= $imageName;
        }
        $kitaplar->save();
        session()->flash('message','Kitap güncellendi.');
    }
    public function render()
    {
        $kategoris = Kategori::all();
        $yazarlars = Yazarlar::all();
        return view('livewire.admin.admin-edit-kitaplar-component',['kategoris'=>$kategoris],['yazarlars'=>$yazarlars])->layout('layouts.base');
    }
}
