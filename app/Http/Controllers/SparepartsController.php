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
        $responseJson = $response->json()['response'];
        $asset = $responseJson[0];
        $asset['AvailQty'] = $responseJson[1]['Quantity'];

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

    public function storeUpdate($id, Request $request){
        if($request->attributes->get('jwtOrg') != "airline"){
            $token = $request->cookie('token');
            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$token,
            ])->put('http://localhost:8080/api/asset/update/'.$id, [
                "name" => $request->name,
                "number" => $request->number,
                "quantity" => $request->qty,
                "weight" => $request->weight,
                "status" => $request->status,
            ]);
        } else {
            $token = $request->cookie('token');
            $response = Http::withHeaders([
                'Authorization' => 'Bearer '.$token,
            ])->put('http://localhost:8080/api/asset/airline/update/'.$id, [
                "nextOverhaul" => $request->nextOverhaul,
                "flightLog" => $request->flightLog,
                "totalHours" => $request->totalHours,
                "status" => $request->status,
            ]);
        }

        return redirect()->route('home');;
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
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->post('http://localhost:8080/api/purchaseorder/add/'.$id, [
            "quantity" => $request->quantity,
            "owner" => $request->attributes->get('jwtEmail'),
        ]);
    
        return redirect()->route('myorder');
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
