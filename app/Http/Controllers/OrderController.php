<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;

class OrderController extends Controller
{
    //
    public function myorder(Request $request){
        $token = $request->cookie('token');
        $org = $request->attributes->get('jwtOrg');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('http://localhost:8080/api/queryallpo');
        $orders = json_decode($response->json()['response']);

        $ordersAvailable = array_filter($orders, function ($item) use($org){
            return ($item->Record->BuyerOrg == $org || $item->Record->SellerOrg == $org);
        });

        return view("myorder", compact('ordersAvailable'));
    }

    public function update(Request $request, $id){
        $org = $request->attributes->get('jwtOrg');
        $token = $request->cookie('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->put('http://localhost:8080/api/purchaseorder/update/'.$id, [
            "updateby" => $request->attributes->get('jwtEmail'),
        ]);
    
        return redirect()->route('myorder');
    }

    public function requestRepair(Request $request, $id){
        $org = $request->attributes->get('jwtOrg');
        $token = $request->cookie('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->postt('http://localhost:8080/api/repairorder/add/'.$id, [
            "owner" => $request->attributes->get('jwtEmail'),
        ]);
    
        return redirect()->route('myorder');
    }

    public function verifyRepair(Request $request, $id){
        $org = $request->attributes->get('jwtOrg');
        $token = $request->cookie('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->put('http://localhost:8080/api/repairorder/quest/'.$id, [
            "updateby" => $request->attributes->get('jwtEmail'),
        ]);
    
        return redirect()->route('myorder');
    }

    
    public function ownedDetails(){
        return view("ownedDetails");
    }
}
