<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\realEstateModel;
use App\Http\Controllers\Controller;

class realEstateApiController extends Controller
{
    public function getRealEstateDataF (){
        $realEstateModelData = realEstateModel::orderBy('id', 'desc')->get();
        if($realEstateModelData->count() > 0){
            return response()->json([
                "status" => true,
                "data" => $realEstateModelData,
            ], 200);
        }else{
            return response()->json([
                "status" => false,
                "Message" => "real Estate Records is Empty",
            ], 404);
        }
     }
}
