<?php

namespace App\Http\Livewire\Admin;
use App\Models\Kira;
use App\Models\Kitaplar;
use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;


class AdminKiralananKitaplarComponent extends Component
{
    use WithPagination;

    public function deleteKira($id)
    {
        $kira = Kira::find($id);
        $kira->delete();
        session()->flash('message','Kiralama Silindi.');
    }

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
        $kiras = Kira::where('durum',"Edilmedi")->paginate(5);
        return view('livewire.admin.admin-kiralanan-kitaplar-component',['kiras'=>$kiras])->layout('layouts.base');
    }
}
