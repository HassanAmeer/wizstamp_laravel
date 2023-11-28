<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wizUsersModel;
use App\Http\Controllers\Controller;

class wizUsersController extends Controller
{
    public function getWizUsersF(){
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


        $data = [
            "all data from json",
        ];
        

    }
}
