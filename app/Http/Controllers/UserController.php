<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class UserController extends Controller
{
    //
    public function login(){
        return view("login");
    }
    public function register(){
        return view("register");
    }

    public function storeRegister(Request $request){
        $response = Http::post('http://localhost:8080/api/createuser', [
            "name" => $request->name,
            "email" => $request->email,
            "org" => $request->organization,
            "role"=> $request->role,
            "address" => $request->address,
            "password" => $request->password
        ]);
        $assets= json_decode($response->json()['response']);
        dd($assets);
        return redirect('login');
    }

    public function forgotPassword(){
        return view("forgotPassword");
    }
    public function resetPassword(){
        return view("resetPassword");
    }
}
