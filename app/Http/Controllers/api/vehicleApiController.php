<?php

namespace App\Http\Controllers\api;

use App\Models\vehicleModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class vehicleApiController extends Controller
{
    public function getVehicleDataF (){
       $electronicsModelData = vehicleModel::orderBy('id', 'desc')->get();
    //    $electronicsModelData = vehicleModel::all();
       if($electronicsModelData->count() > 0){
           return response()->json([
               "status" => true,
               "data" => $electronicsModelData,
           ], 200);
       }else{
           return response()->json([
               "status" => false,
               "Message" => "Vehicle Records is Empty",
           ], 404);
       }
    }
}
