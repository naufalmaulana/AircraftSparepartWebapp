<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Config;

class HomeController extends Controller
{
    public function landing(){
        $response = Http::withHeaders([
            'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE2Mzg3Mjg0NzIsInVzZXJuYW1lIjoiY2hyaXN0ZXN0ZEBnbWFpbC5jb20iLCJvcmdOYW1lIjoibWFudWZhY3R1cmVyIiwiaWF0IjoxNjM4Njk4NDcyfQ.ymRj5UbjxzahgEgH_z05brKS34CO_VNGh_69_ulpEyc',
        ])->get('http://localhost:8080/api/queryallassets');
        $assets = json_decode($response->json()['response']);

        $responseOwned = Http::withHeaders([
            'Authorization' => 'Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJleHAiOjE2Mzg3Mjg0NzIsInVzZXJuYW1lIjoiY2hyaXN0ZXN0ZEBnbWFpbC5jb20iLCJvcmdOYW1lIjoibWFudWZhY3R1cmVyIiwiaWF0IjoxNjM4Njk4NDcyfQ.ymRj5UbjxzahgEgH_z05brKS34CO_VNGh_69_ulpEyc',
        ])->get('http://localhost:8080/api/queryassetowned');
        $assetsOwned = json_decode($responseOwned->json()['response']);
        return view("landing", compact('assets', 'assetsOwned'));
    }
    public function supplierLanding(){
        return view("supplierLanding");
    }
    public function mroLanding(){
        return view("mroLanding");
    }
}
