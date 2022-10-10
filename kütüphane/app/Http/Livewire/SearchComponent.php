<?php

namespace App\Http\Livewire;
use App\Models\Kitaplar;
use App\Models\Kategori;
use App\Models\Kira;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SearchComponent extends Component
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

    public $sorting;
    public $pagesize;

    public $search;
    public $kitaplar_kate;
    public $kitaplar_kate_id;

    public function mount()
    {
        $this->sorting = "default";
        $this->pagesize = 5;
        $this->fill(request()->only('search','kitaplar_kate','kitaplar_kate_id'));

    }
    use WithPagination;
    public function render()
    {
        if($this->sorting =='date')
        {
            $kitaplars = Kitaplar::where('KitapAdi','like','%'.$this->search .'%')->where('kategori_id','like','%' .$this->kitaplar_kate_id.'%')->orderBy('created_at','DESC')->paginate($pagesize);
        }
        else
        {
            $kitaplars = Kitaplar::where('KitapAdi','like','%'.$this->search .'%')->where('kategori_id','like','%' .$this->kitaplar_kate_id.'%')->paginate($this->pagesize);
        }
        $kategoris = Kategori::all();
        return view('livewire.search-component',['kitaplars'=>$kitaplars],['kategoris'=>$kategoris])->layout("layouts.base");
    }
}
