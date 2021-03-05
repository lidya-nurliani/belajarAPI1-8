<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BabSatuController;
use App\Artikel;
use App\Pengumuman;
use Illuminate\Http\Request;

class BabSatuController extends Controller
{
    public function a1(){
        $artikel=Artikel::where('id',4)->where('users_id',1)->get();

        return $artikel;
    }

    public function a2(){
        $artikel=Artikel::where('id',3)->orwhere('id',2)->get();

        return $artikel;
    }

    public function a3(){
        $artikel=Artikel::where('id',2)->whereHas('user',function($query){
            $query->where('name','hai');
        })->with('user')->get();

        return $artikel;
    }

    public function a4(){
        $pengumuman=Pengumuman::whereHas('user',function ($query){
            $query->whereHas('galeri',function ($query){
                $query->where('id',1);
            });
        })->get();

        return $pengumuman;
    }
}
