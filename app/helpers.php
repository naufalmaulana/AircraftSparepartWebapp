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

if(!function_exists('checkUpdateAccess')){
    function checkUpdateAccess($status) {
        if($status = "Available" || $status == "Not Available"){
            return true;
        } 
        return false;
    }
}

if(!function_exists('checkOrderStatus')){
    function checkOrderStatus($status, $org, $buyerOrg, $sellerOrg, $role) {
        if($role != "supervisor"){
            return false;
        }
        if($status == "Waiting for Buyer Organization" && $org == $buyerOrg){
            return true;
        }else if ($status == "Waiting for Seller Organization" && $org == $sellerOrg){
            return true;
        }
        return false;
    }
}

if(!function_exists('checkRepairOrderStatus')){
    function checkRepairOrderStatus($status, $org, $requesterOrg, $repairerOrg) {
        if($status == "Waiting for Requester Organization" && $org == $requesterOrg){
            return true;
        }else if ($status == "Waiting for Repairer Organization" && $org == $repairerOrg){
            return true;
        }else if ($status == "Repairing" && $org == $repairerOrg){
            return true;
        }
        return false;
    }
}

if(!function_exists('getHistoryClass')){
    function getHistoryClass($asset) {
        if($asset['PurchaseOrderReference']){
            return "history-purchased";
        } else if ($asset['RepairOrderReference']){
            return "history-requestRepair";
        }
        return "history-default";
    }
}

if(!function_exists('getOrderedQuantity')){
    function getOrderedQuantity($leftQty, $qty) {
        if($leftQty == $qty){
            return "";
        } 
        return "(".($qty - $leftQty)." pcs ordered)";
    }
}

if(!function_exists('getImagePath')){
    function getImagePath($path) {
        if($path == ""){
            return "/assets/sparepart-dummy1.jpg";
        } 
        return $path;
    }
}

if(!function_exists('isOrderPending')){
    function isOrderPending($leftQty, $qty) {
        if($leftQty == $qty){
            return false;
        } 
        return true;
    }
}