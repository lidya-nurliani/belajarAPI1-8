<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengumuman extends Model
{
    use HasFactory;

    protected $table='pengumuman';

    protected $fillable=[
        'judul','isi','users_id','kategori_pengumuman_id'
    ];

    public function KategoriPengumuman(){
        return $this->belongsTo( \App\KategoriPengumuman::class, 'kategori_pengumuman_id', 'id');
    }

    public function User(){
        return $this->belongsTo( \App\User::class, 'users_id', 'id');
    }
}
