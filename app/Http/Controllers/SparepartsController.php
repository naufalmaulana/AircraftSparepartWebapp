<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;

class SparepartsController extends Controller
{

    public function spareparts(){
        return view("spareparts");
    }
    public function detail($id, Request $request){
        $token = $request->cookie('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('http://localhost:8080/api/asset/detail/'.$id);
        $asset = $response->json()['response'];

        return view("sparepartDetails", compact('asset', 'id'));
    }

    public function update($id, Request $request){
        $token = $request->cookie('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('http://localhost:8080/api/asset/detail/'.$id);
        $asset = $response->json()['response'];

        return view("sparepartUpdate", compact('asset', 'id'));
    }

    public function history($id, Request $request){
        $token = $request->cookie('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('http://localhost:8080/api/asset/history/'.$id);
        $assets = $response->json()['response'];

        return view("history", compact('assets', 'id'));
    }

    public function buy($id, Request $request){
        $org = $request->attributes->get('jwtOrg');
        $token = $request->cookie('token');
        if($org == "airline"){
            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$token,
            ])->put('http://localhost:8080/api/asset/update/'.$id, [
                "name" =>$request->name,
                "number" => $request->number,
                "updateBy" => $request->updateBy,
                "status" => "Available",
                "quantity" => $request->quantity,
                "weight" => $request->weight,
                "newOwner" => $request->attributes->get('jwtEmail'),
            ]);
    
        } else {
            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$token,
            ])->put('http://localhost:8080/api/asset/transfer/'.$id, [
                "owner" => $request->attributes->get('jwtEmail')
            ]);
    
        }
  
       
        return redirect()->route('home');
    }

    public function add(Request $request){
        $token = $request->cookie('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->post('http://localhost:8080/api/asset/add', [
            "name" => $request->name,
            "number" => $request->number, 
            "quantity" => $request->qty, 
            "weight" => $request->weight
        ]);

        return redirect()->route('home');
    }
}
