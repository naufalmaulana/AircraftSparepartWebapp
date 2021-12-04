<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyorderController extends Controller
{
    //
    public function myorder(){
        return view("myorder");
    }
    public function ownedDetails(){
        return view("ownedDetails");
    }
}
