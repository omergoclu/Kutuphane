<?php

namespace App\Http\Livewire\User;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserEditProfilComponent extends Component
{
    public $name;
    public $lastName;
    public $Yasi;
    public $Adres;
    public $email;

    public function mount()
    {
        $user = User::find(Auth::user()->id);
        $this->name = $user->name;
        $this->lastName = $user->lastName;
        $this->Yasi = $user->Yasi;
        $this->Adres = $user->Adres;
        $this->email = $user->email;
    }

    public function updateProfil()
    {
        $user = User::find(Auth::user()->id);
        $user->name = $this->name;
        $user->lastName = $this->lastName;
        $user->Yasi = $this->Yasi;
        $user->Adres = $this->Adres;
        $user->email = $this->email;
        $user->save();
        session()->flash('message','Profiliniz Güncellendi');
    }

    public function render()
    {
        return view('livewire.user.user-edit-profil-component')->layout('layouts.base');
    }
}
