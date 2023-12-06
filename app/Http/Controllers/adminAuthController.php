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
    //////////////////////////////////////////////////////////////////////////
    public function gotothomeF(){

            $admintable = adminAuthModel::get();
            $alldocs = allStampDocsModel::count();
            $sellerdocs = allStampDocsModel::where('islocked', '0')->count();
            $buyerdocslock = allStampDocsModel::where('islocked', '1')->count();
            $allusers = wizUsersModel::count();
            
            $lasUserDate = wizUsersModel::latest('created_at')->first()->created_at ?? 0;
            $lastsellerDocDate = allStampDocsModel::where('islocked', '0')->latest('created_at')->first()->created_at ?? 0;
            $lastBuyerDocDate = allStampDocsModel::where('islocked', '1')->latest('created_at')->first()->created_at ?? 0;
            $lastDocsDate = allStampDocsModel::latest('created_at')->first()->created_at ?? 0;

            if ($admintable->isNotEmpty()) {
                $adminprofile = $admintable->first()->image;
            } else {
                $adminprofile = null;
            }

            return view('admin/home', compact(['adminprofile','alldocs','sellerdocs','buyerdocslock','allusers','lasUserDate','lastsellerDocDate','lastBuyerDocDate','lastDocsDate']));
        
    }
    //////////////////////////////////////////////////////////////////////////
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

            $admintable = adminAuthModel::get();
            $alldocs = allStampDocsModel::count();
            $sellerdocs = allStampDocsModel::where('islocked', '0')->count();
            $buyerdocslock = allStampDocsModel::where('islocked', '1')->count();
            $allusers = wizUsersModel::count();
            
            $lasUserDate = wizUsersModel::latest('created_at')->first()->created_at ?? 0;
            $lastsellerDocDate = allStampDocsModel::where('islocked', '0')->latest('created_at')->first()->created_at ?? 0;
            $lastBuyerDocDate = allStampDocsModel::where('islocked', '1')->latest('created_at')->first()->created_at ?? 0;
            $lastDocsDate = allStampDocsModel::latest('created_at')->first()->created_at ?? 0;

            if ($admintable->isNotEmpty()) {
                $adminprofile = $admintable->first()->image;
            } else {
                $adminprofile = null;
            }

                return view('admin/home', compact(['adminprofile','alldocs','sellerdocs','buyerdocslock','allusers','lasUserDate','lastsellerDocDate','lastBuyerDocDate','lastDocsDate']));
            }else{
                return redirect()->back()->with('redtoast', 'Invalid Account.');
            }
            // if ($dataofauth) {
                // $hashedPassword = Hash::make(1234);
                // if (Hash::check($request->loginpassword, $dataofauth->password)) { }}else{}
            }
    }
    ////////// get Login Page F start
    public function getLoginPageF () {
        return view('admin/auth/login');
    }
    ////////// get Login Page F End
    public function adminprofileF () {
        $admintable = adminAuthModel::get();
        if ($admintable->isNotEmpty()) {
            $adminprofile = $admintable->first()->image;
        } else {
            $adminprofile = null;
            $admintable = 'Records Empty';
        }
        $id = $admintable->first()->id;
        $image = $admintable->first()->image;
        $name = $admintable->first()->name;
        $email = $admintable->first()->email;

        return view('admin/profile', compact(['adminprofile','id','image','name','email']));
    }
    //////////// update profile
    public function adminprofileUpdateF (Request $request) {
        $check = adminAuthModel::find($request->pid);
        if ($request->hasFile('pimage')) {
            $doc = $request->file('pimage');
           $docname = time() . '.' . $doc->getClientOriginalExtension();
           $doc->move(public_path('icons'), $docname);
           $profileimage = 'icons/'.$docname;
       }else {
           $profileimage = $chek->image;
       }
         if($request->ppassword){
            $check->update([
                'name' => $request->pname,
                'image' => $profileimage,
                'email' => $request->pemail,
                'password' => $request->ppassword,
            ]);
            }else{
                $check->update([
                    'image' => $profileimage,
                    'name' => $request->pname,
                    'email' => $request->pemail,
                ]);
            }
            
            $admintable = adminAuthModel::get();
            if ($admintable->isNotEmpty()) {
                $adminprofile = $admintable->first()->image;
            } else {
                $adminprofile = null;
            }
        return redirect('wizostamp/adminprofile')->with('greentoast', 'Profile Is Updated.');
    }
}
