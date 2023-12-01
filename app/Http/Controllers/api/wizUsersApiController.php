<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\wizUsersModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

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

    /////////////// loginf
    public function loginWizUsersApiF(Request $request){
       $email = $request->email;
       $validator = Validator::make($request->all(), [
        'email' => 'required',
        'password' => 'required',
       ]);
        if($validator->fails()){
            return response()->json([
                "status" => false,
                "required fields for Login" => [
                'email','password'
                ],
                "Message" => "2 Field Required",
            ], 404);
        }else{
            $existingUserEmail = wizUsersModel::where('email', $request->email)->first();
            $existingUserPass = wizUsersModel::where('password', $request->password)->first();
            if ($existingUserEmail && $existingUserPass) {
                return response()->json([
                    "status" => true,
                    "Message" => "You Are Login",
                ], 200);
            } else {
                return response()->json([
                    "status" => false,
                    "Message" => "Please Enter Correct Data",
                ], 404);
            }
        }
    }



    public function ResetPasswordF (Request $request){
        $validator = Validator::make($request->all(), [
            'email' => 'required',
       ]);
      if($validator->fails()){
            return response()->json([
                "status" => false,
                "required field For Reset Password" => [
                   'email',
                ],
                "Message" => "Required Email Field",
            ], 404);
      }else{
       
        $existingUserEmail = wizUsersModel::where('email', $request->email)->first();
        if ($existingUserEmail) {
            return response()->json([
                "status" => true,
                "Message" => "OTP Sent to $request->email",
            ], 404);
        } else {
            return response()->json([
                "status" => false,
                "Message" => "Please Enter Correct Email",
            ], 404);
        }
      }
    }
    ///////// signup wiz users
    public function SignUpWizUsersApiF(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            // 'brandimg' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
       ]);
      if($validator->fails()){
       // return redirect()->back()->withErrors($validator)->withInput();
            return response()->json([
                "status" => false,
                "required fields For Signup" => [
                   'name',
                   'email',
                   'phone',
                   'password',
                ],
                "Message" => "Required All Fields",
            ], 404);
      }else{
        $existingUserEmail = wizUsersModel::where('email', $request->email)->first();
        $existingUserPhone = wizUsersModel::where('phone', $request->phone)->first();
        if ($existingUserEmail) {
            return response()->json([
                "status" => false,
                "Message" => "Email Already Exist",
            ], 404);
        } else if($existingUserPhone){
            return response()->json([
                "status" => false,
                "Message" => "Phone Number Already Exist",
            ], 404);
        } else {
       $check = wizUsersModel::create([
           'name' => $request->name,
           'email' => $request->email,
           'phone' => $request->phone,
           'password' => $request->password,
       ]);
       if($check){
        return response()->json([
            "status" => true,
            "Message" => "Account is Created",
        ], 200);
           }else{
            return response()->json([
                "status" => false,
                "Message" => "SomeThing Went Wrong",
            ], 404);
           }
               }
        } 
    }
    
}
