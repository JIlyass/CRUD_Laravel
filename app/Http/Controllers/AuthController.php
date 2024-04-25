<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Http\Requests\loginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
       

        return view("Connexion.login");
    }

    public function login2(loginRequest $req){
        // dd("hello from login2");
        $etat_login=$req->validated();
        if(Auth::attempt($etat_login)){
            session()->regenerate();
            return redirect()->route('welcome');
        }else{
            return to_route('login')
            ->withErrors([
                "email"=>"email ou mot de passe incorrcte ! "
            ])->withInput([
                "email","password"
            ]);
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }
    public function signin(AuthRequest $req){
        User::create([
            "name"=> $req->name,
            "email"=> $req->email,
            "password"=> Hash::make($req->password)
                
        ]);   
        session()->regenerate();    
        return to_route('welcome');
    }

}
