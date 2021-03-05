<?php

namespace App\Http\Controllers;
use App\Artikel;
use App\Pengumuman;
use Illuminate\Http\Request;

class BabDuaController extends Controller
{
    public function a5(){
        $pengumuman=Pengumuman::whereHas('user',function ($query){
            $query->whereHas('galeri',function ($query){
                $query->whereHas('KategoriGaleri', function($query){
                    $query->where('nama','like','aut%');
                });
            });
        })->get();

        return $pengumuman;
    }

    public function a6(){
        $pengumuman=Pengumuman::whereHas('user',function ($query){
            $query->whereHas('galeri')->whereHas('berita');
        })->get();

        return $pengumuman;
    }
    
}
