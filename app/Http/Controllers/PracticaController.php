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
    public function MiguelDuenez(){
        return view('MiguelDuenez');
    }
     public function Login(){
        return view('vistas.Login');
    }
     public function Jersey(){
         return view('vistas.jersey');
    }
     public function Outlet(){
        return view('vistas.outlet');
    }
    public function Deportes(){
        return view('vistas.deportes');
    }
    public function ninos(){
        return view('vistas.ninos');
   }
    public function Hombre(){
        return view('vistas.Hombre');
    }
    public function ninas(){
        return view('vistas.ninas');
    }
    public function mujeres(){
        return view('vistas.mujeres');
    }
    public function uniformes(){
        return view('vistas.uniformes');
    }
}
