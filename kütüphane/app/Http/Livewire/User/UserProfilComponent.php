<?php

namespace App\Http\Livewire\User;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfilComponent extends Component
{
    public function render()
    {
        $user = User::find(Auth::user()->id);
        return view('livewire.user.user-profil-component',['user'=>$user])->layout('layouts.base');
    }
}
