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
<<<<<<< HEAD
    }
    public function ninos(){
        return view('vistas.ninos');
   }
=======
     }
     public function Hombre(){
        return view('vistas.Hombre');
    }
>>>>>>> f6392160fddfc6c3a2d5ee18d57f067964159782
}
