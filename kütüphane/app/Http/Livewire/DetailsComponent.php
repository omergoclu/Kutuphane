<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Kitaplar;
use App\Models\Kira;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class DetailsComponent extends Component
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

    public $Url;
    public function mount($Url)
    {
        $this->Url = $Url;
    }
    public function render()
    {
        $kitaplar = Kitaplar::where('Url',$this->Url)->first();
        return view('livewire.details-component',['kitaplar'=>$kitaplar])->layout('layouts.base');
    }
}
