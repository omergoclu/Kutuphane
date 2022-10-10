<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Kitaplar;

class Kira extends Model
{
    use HasFactory;
    protected $table ="kiras";

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function kitaplar()
    {
        return $this->belongsTo(Kitaplar::class,'kitap_id');
    }

}
