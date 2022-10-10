<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\User;
use App\Models\Yazarlar;

class Kitaplar extends Model
{
    use HasFactory;
    protected $table="Kitaplars";

    public function kategori()
    {
        return $this->belongsTo(Kategori::class,'kategori_id');
    }

    public function yazarlar()
    {
        return $this->belongsTo(Yazarlar::class,'yazar_id');
    }
}
