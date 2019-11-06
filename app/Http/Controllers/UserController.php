<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\MessageMail;
use Mail;

class UserController extends Controller
{
    public function main(Request $request){
        switch($request->method()){
            case 'GET':
            return $this->index();
            break;
            case 'POST':
            if($request->evt == "create"){
                return $this->store($request);
            }
            return $this->login($request);
            break;
            default:
                return $this->email($request);
        }
        
    }

    private function login(Request $request){
        $this->validations($request, true);
        if(\Auth::attempt(['email' => $request->email, 'password'=> $request->password])){
            return redirect('/auth');
        } else {
            return redirect('login')->with('status', 'Credenciales no validas');
        }
    }

    private function index(){
        return view("vistas.Login");
    }

    private function store(Request $request){
        $this->validations($request);
        $user = new User;
        $user->nombre = $request->nombre;
        $user->apellido = $request->apellido;
        $user->fecha_nacimiento = $request->fecha_nacimiento;
        $user->celular = $request->celular;
        $user->email = $request->email;
        $user->sexo = $request->sexo;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json(["message"=> "cuenta creada correctamente"]);
    }

    private function email(Request $request){
        Mail::send(new MessageMail($request->email));
        return response()->json(['message' => 'Se envío un mensaje a tu correo']);
    }

    private function validations(Request $request, $login = false){
        if($login){
            $this->validate($request, [
                'email'      => 'required|email',
                'password'   => 'required',
            ]); 
        } else {
            $this->validate($request, [
                'nombre'     => 'required',
                'apellido'   => 'required',
                'email'      => 'required|email|unique:users,email',
                'password'   => 'required',
            ]);
        }
    }
}
