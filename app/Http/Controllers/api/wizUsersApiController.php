<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\wizUsersModel;
use App\Http\Controllers\Controller;

class wizUsersApiController extends Controller
{
    public function getWizUsersApiF(){
        $wizusers = wizUsersModel::orderBy('id', 'desc')->get();
        if($wizusers->count() > 0){
            return response()->json([
                "status" => true,
                "data" => $wizusers,
            ], 200);
        }else{
            return response()->json([
                "status" => false,
                "Message" => "Users Records is Empty",
            ], 404);
        }
    }
}
