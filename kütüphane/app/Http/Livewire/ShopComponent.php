<?php

namespace App\Http\Livewire;
use App\Models\Kitaplar;
use App\Models\Kategori;
use App\Models\Kira;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ShopComponent extends Component
{
    public $user_id;
    public $kitap_id;
    public $AlimTarihi;
    public $TeslimTarihi;
    public $durum;

    public function kirala($kitap_id)
    {
        if(Auth::check())
        {

            if(Kira::where('user_id',Auth::user()->id)->where('durum',"Edilmedi")->count())
            {
                session()->flash('message','Kiraladığınız Kitap bulunmaktadır!');
                return redirect('/user/dashboard');
            }
            else
            {
                $kira = new Kira();
                $kira->user_id = Auth::user()->id;
                $kira->kitap_id = $kitap_id;
                $kira->AlimTarihi = Carbon::now();
                $kira->TeslimTarihi = Carbon::now()->addDays(7);
                $kira->durum = 'Edilmedi';
                $kitaplar = Kitaplar::find($kitap_id);
                $kitaplar->kiraliMi = 'Evet';
                $kitaplar->save();
                $kira->save();
                session()->flash('message','Kitap Kiralandı.');
                return redirect('/user/dashboard');
            }
        }
        else
        {
            return redirect()->route('login');
        }
    }

    use WithPagination;
    public function render()
    {
        $kategoris = Kategori::all();
        $kitaplars = Kitaplar::where('kiraliMi',"Hayır")->paginate(7);
        return view('livewire.shop-component',['kitaplars'=>$kitaplars],['kategoris'=>$kategoris])->layout("layouts.base");
    }
}
