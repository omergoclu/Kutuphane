<?php
namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Kira;
use App\Models\Kitaplar;
use App\Models\Yazarlar;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class HomeComponent extends Component
{
    public function render()
    {
        $kiras =Kira::count();
        $kitaplars =Kitaplar::count();
        $yazarlars =Yazarlar::count();
        $users = User::withCount('kiras')->orderBy('kiras_count', 'desc')->take(1)->get();
        return view('livewire.home-component',[
            'users'=>$users,
            'kiras'=>$kiras,
            'kitaplars'=>$kitaplars,
            'yazarlars'=>$yazarlars,
            ])->layout('layouts.base');
    }
}
