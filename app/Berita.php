<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table='berita';

    protected $fillable=[
        'judul','isi','users_id','kategori_berita_id'
    ];

    public function KategoriBerita(){
        return $this->belongsTo( \App\KategoriBerita::class, 'kategori_berita_id', 'id');
    }

    public function User(){
        return $this->belongsTo( \App\User::class, 'users_id', 'id');
    }
}
