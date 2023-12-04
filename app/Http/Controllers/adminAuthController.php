<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wizUsersModel;
use App\Models\adminAuthModel;
use App\Models\allStampDocsModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class adminAuthController extends Controller
{
    public function adminLoginF(Request $request){
        // dd('work');
        $validator = Validator::make($request->all(), [
            'loginemail' => 'required|email',
            'loginpassword' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route('admin/auth/login')->with('redtoast', 'Invalid Account.');
            // return redirect()->back()->withErrors($validator)->withInput();
        } else {
        $existingEmail = adminAuthModel::where('email', $request->loginemail)->first();
        $existingpassword = adminAuthModel::where('password', $request->loginpassword)->first();

             if($existingEmail && $existingpassword){

       $alldocs = allStampDocsModel::where('email', $request->loginemail);
       $sellerdocs = allStampDocsModel::orderBy('id', 'desc')->get();
       $buyerdocslock = allStampDocsModel::orderBy('id', 'desc')->get();
       $alusers = wizUsersModel::where('islocked', '1')->count();


                return view('admin/home', compact(['alusers','']));
            }else{
                return redirect()->back()->with('redtoast', 'Invalid Account.');
            }
            // if ($dataofauth) {
                // $hashedPassword = Hash::make(1234);
                // if (Hash::check($request->loginpassword, $dataofauth->password)) { }}else{}
            }
    }
    ////////// get Login Page F start
    public function getLoginPageF (){
        return view('admin/auth/login');
    }
    ////////// get Login Page F End
}
