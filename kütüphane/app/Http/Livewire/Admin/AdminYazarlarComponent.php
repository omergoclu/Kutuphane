<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Yazarlar;
use Livewire\WithPagination;

class AdminYazarlarComponent extends Component
{
    use WithPagination;
    public function deleteYazarlar($id)
    {
        $yazarlar = Yazarlar::find($id);
        $yazarlar->delete();
        session()->flash('message','Yazar silindi.');
    }
    public function render()
    {
        $yazarlars = Yazarlar::paginate(5);
        return view('livewire.admin.admin-yazarlar-component',['yazarlars'=>$yazarlars])->layout('layouts.base');
    }
}
