<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function landing(Request $request){
        $token = $request->cookie('token');
        $response = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('http://localhost:8080/api/queryallassets');
        $assets = json_decode($response->json()['response']);

        $assetsAvailable= array_filter($assets, function ($item) {
            return true;
            //return $item->Record->Status == "Available";
        });
        $assetsAvailable= array_reverse($assetsAvailable);

        $responseOwned = Http::withHeaders([
            'Authorization' => 'Bearer '.$token,
        ])->get('http://localhost:8080/api/queryassetowned');
        $assetsOwned = json_decode($responseOwned->json()['response']);
        $assetsOwned= array_reverse($assetsOwned);
        return view("landing", compact('assets', 'assetsOwned', 'assetsAvailable'));
    }

    public function mroLanding(){
        return view("mroLanding");
    }
}
