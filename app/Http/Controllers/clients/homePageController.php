<?php

namespace App\Http\Controllers\clients;

use Illuminate\Http\Request;
use App\Models\wizUsersModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class HomePageController extends Controller
{
    public function gotohomeF() {
     return view('clients/home');
    }

////////////////////////////////////////////////////////////////////////////////////////
    public function gotohomepageF() {
     return view('clients/homepage');
    }

    public function userLogoutF() {
     session()->forget(['status', 'user_data']);
     return view('clients/homepage');
    }

    ///////////// for users login start
    public function userLoginF(Request $req)
    {
        $validator = Validator::make($req->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/home')->with('redtoast', 'Required Login Fields.');
        } else {
            $existingUser = wizUsersModel::where('email', $req->email)
                ->where('password', $req->password)
                ->first();

            if ($existingUser) {
                session(['status' => 'login', 'user_data' => $existingUser]);
                return redirect('/home')->with('greentoast', 'Successfully Logged In.');
            } else {
                return redirect('/home')->with('redtoast', 'Incorrect Email or Password.');
            }
        }
    }
    ///////////// for users login end
}
