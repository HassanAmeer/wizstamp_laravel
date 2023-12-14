<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\brandingModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;


// "id",
// "user_id",
// "bussiness_logo",
// "bussiness_name",
// "bussiness_email",
// "bussiness_phone",
// "plan_type",
// "plan_name",
// "plan_duration",
// "is_paid",
// "pay_by",
// "total",
// "is_active",


class brandingApiController extends Controller
{
    public function getBrandingF (){
        $data = brandingModel::orderBy('id', 'desc')->get();
        if($data->count() > 0){
            return response()->json([
                "status" => true,
                "data" => $data,
            ], 200);
        }else{
            return response()->json([
                "status" => false,
                "Message" => "Branding Records is Empty",
            ], 404);
        }
     }

    ///////////// add brands 
    public function addBrandingF (Request $request){
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
       ]);
      if($validator->fails()){
            return response()->json([
                "status" => false,
                "required fields For Signup" => [
                    "user_id",
                    "bussiness_logo",
                    "bussiness_name",
                    "bussiness_email",
                    "bussiness_phone",
                    "plan_type",
                    "plan_name",
                    "plan_duration",
                    "is_paid",
                    "pay_by",
                    "total",
                    "is_active",
                ],
                "Message" => "Required All Fields",
            ], 404);
      }else{
        $check = brandingModel::create([
            'user_id' => $request->user_id,
            'bussiness_logo' => $request->bussiness_logo,
            'bussiness_name' => $request->bussiness_name,
            'bussiness_email' => $request->bussiness_email,
            'bussiness_phone' => $request->bussiness_phone,
            'plan_type' => $request->plan_type,
            'plan_name' => $request->plan_name,
            'plan_duration' => $request->plan_duration,
            'is_paid' => $request->is_paid,
            'pay_by' => $request->pay_by,
            'total' => $request->total,
            'is_active' => $request->is_active,
        ]);
        if($check){
            return response()->json([
                "status" => true,
                "Message" => "Branding is Created",
            ], 200);
        }else{
            return response()->json([
                "status" => false,
                "Message" => "SomeThing Went Wrong",
            ], 404);
        }
       }
     }
    ///////////// update brands 
    public function updateBrandingF (Request $request){
        $validator = Validator::make($request->all(), [
            'id' => 'required',
       ]);
      if($validator->fails()){
            return response()->json([
                "status" => false,
                "required fields For Signup" => [
                    "id",
                    "user_id",
                    "bussiness_logo",
                    "bussiness_name",
                    "bussiness_email",
                    "bussiness_phone",
                    "plan_type",
                    "plan_name",
                    "plan_duration",
                    "is_paid",
                    "pay_by",
                    "total",
                    "is_active",
                ],
                "Message" => "Required All Fields",
            ], 404);
      }else{
        $check = brandingModel::find($request->id);
        if($check){
            $check->update([
            // 'user_id' => $request->user_id,
            'bussiness_logo' => $request->bussiness_logo,
            'bussiness_name' => $request->bussiness_name,
            'bussiness_email' => $request->bussiness_email,
            'bussiness_phone' => $request->bussiness_phone,
            // 'plan_type' => $request->plan_type,
            // 'plan_name' => $request->plan_name,
            // 'plan_duration' => $request->plan_duration,
            // 'is_paid' => $request->is_paid,
            // 'pay_by' => $request->pay_by,
            // 'total' => $request->total,
            // 'is_active' => $request->is_active,
        ]);
        if($check){
            return response()->json([
                "status" => true,
                "Message" => "Branding is Updated",
            ], 200);
        }else{
            return response()->json([
                "status" => false,
                "Message" => "SomeThing Went Wrong",
            ], 404);
        }
        }else{
            return response()->json([
                "status" => false,
                "Message" => "User Not Found",
            ], 404);
        }
        
       }
     }
}
