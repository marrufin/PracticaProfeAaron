<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticaController extends Controller
{
    public function JoseCarlosMarrufoVazquez(){
        return view('JoseCarlosMarrufo');
    }
    public function VeronicaHuizar(){
        return view('VeronicaHuizar');
    }
    public function LuisMontesMartinez(){
        return view('LuisMontes');
    }
    public function RicardoMartinez(){
        return view('RicardoMartinez');
    }
}
