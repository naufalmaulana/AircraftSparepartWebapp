<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function landing(){
        return view("landing");
    }
    public function supplierLanding(){
        return view("supplierLanding");
    }
    public function mroLanding(){
        return view("mroLanding");
    }
}
