<?php

namespace App\Http\Livewire\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Kira;
use App\Models\Kitaplar;
use Livewire\Component;
use Carbon\Carbon;

class UserDashboardComponent extends Component
{
    public $kiraliMi;
    public function teslimEt($id,$kitap_id)
    {
        if(Auth::check())
        {
            $kira = Kira::find($id);
            $kira->TeslimTarihi = Carbon::now();
            $kira->durum = 'Edildi';
            $kitaplar = Kitaplar::find($kitap_id);
            $kitaplar->kiraliMi = 'Hayır';
            $kitaplar->save();
            $kira->save();
            session()->flash('message','Kitap Teslim Edildi.');
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function render()
    {
        $kiras = Kira::where('user_id',Auth::user()->id)->paginate(12);
        return view('livewire.user.user-dashboard-component',['kiras'=>$kiras])->layout('layouts.base');
    }
}
