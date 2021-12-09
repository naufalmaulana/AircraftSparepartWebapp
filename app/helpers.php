<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Response;

if(!function_exists('checkBuyAccess')){
    function checkBuyAccess($org, $buyerOrg) {
        if($org === "manufacturer" && $buyerOrg === "vendor"){
            return true;
        } else if ($org === "vendor" && $buyerOrg === "mro"){
            return true;
        } else if ($org === "mro" && $buyerOrg === "airline"){
            return true;
        }
        return false;
    }
}