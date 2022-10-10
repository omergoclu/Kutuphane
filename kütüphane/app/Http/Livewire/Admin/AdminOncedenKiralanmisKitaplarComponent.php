<?php

namespace App\Http\Livewire\Admin;
use App\Models\Kira;
use Livewire\WithPagination;
use Livewire\Component;

class AdminOncedenKiralanmisKitaplarComponent extends Component
{
    public function deleteKira($id)
    {
        $kira = Kira::find($id);
        $kira->delete();
        session()->flash('message','Kiralama Silindi.');
    }
    use WithPagination;
    public function render()
    {
        $kiras = Kira::where('durum',"Edildi")->paginate(5);
        return view('livewire.admin.admin-onceden-kiralanmis-kitaplar-component',['kiras'=>$kiras])->layout('layouts.base');
    }
}
