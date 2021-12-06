<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;
use Cookie;

class UserController extends Controller
{
    //
    public function login(){
        return view("login");
    }

    public function storeLogin(Request $request){
        $response = Http::post('http://localhost:8080/api/signin', [
            "email" => $request->email,
            "password" => $request->password
        ]);
        if($response->successful()){
            $token= $response->json()['response'];
            $minutes = 15;
            Cookie::queue('token', $token , $minutes);
            return redirect()->route('home');
        } else {
            $error= $response->json()['response'];
            return redirect()->back()->with('error', $error);
        }
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
        if($response->successful()){
            return redirect()->route('login');
        } else {
            $error= $response->json()['response'];
            return redirect()->back()->with('error', $error);
        }
       
    }

    public function forgotPassword(){
        return view("forgotPassword");
    }
    public function resetPassword(){
        return view("resetPassword");
    }
}
