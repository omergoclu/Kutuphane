<?php

namespace App\Http\Livewire\Admin;
use App\Models\Kitaplar;
use Livewire\Component;
use Livewire\WithPagination;

class AdminKitaplarComponent extends Component
{
    use WithPagination;
    public function deleteKitaplar($id)
    {
        if(Kitaplar::where('id',$id)->where('kiraliMi',"Hayır")->count())
        {
            $kitaplar = Kitaplar::find($id);
            $kitaplar->delete();
            session()->flash('message','Kitap silindi.');
        }
        else
        {
            session()->flash('message','Bu kitap kiralı şuan silinemez !');
            return redirect('/admin/kitaplars');
        }

    }
    public function render()
    {
        $kitaplars = Kitaplar::paginate(5);
        return view('livewire.admin.admin-kitaplar-component',['kitaplars'=>$kitaplars])->layout('layouts.base');
    }
}
