<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KementrianController extends Controller
{
    public function sekben (){
        return view ('kementrian.sekben');
    }
    public function pemberdayaan_perempuan (){
        return view ('kementrian.ppkg');
    }
    public function medkraf (){
        return view ('kementrian.medkraf');
    }
    public function advokesma (){
        return view ('kementrian.advokesma');
    }
    public function ilpres (){
        return view ('kementrian.ilpres');
    }
    public function sospol (){
        return view ('kementrian.sospol');
    }
    public function dagri (){
        return view ('kementrian.sekben');
    }
    public function pengmaspar (){
        return view ('kementrian.pengmas');
    }
    public function ekraf (){
        return view ('kementrian.ekraf');
    }
    public function prada (){
        return view ('kementrian.prada');
    }
    public function keagamaan (){
        return view ('kementrian.keagamaan');
    }
}
