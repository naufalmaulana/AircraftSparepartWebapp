<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SparepartsController extends Controller
{
    //
    public function spareparts(){
        return view("spareparts");
    }
    public function sparepartDetails(){
        return view("sparepartDetails");
    }
}
