<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\adminAuthModel;
use App\Models\allStampDocsModel;
use App\Http\Controllers\Controller;

class allStampController extends Controller
{
    public function getAllStampsF(){
        $stampstable = allStampDocsModel::orderBy('id', 'desc')->get();
        $admintable = adminAuthModel::get();
        if ($admintable->isNotEmpty()) {
            $adminprofile = $admintable->first()->image;
        } else {
            $adminprofile = null;
        }
        if(!$stampstable->count() > 0){
            $stampstable = 'Empty Record';
        }
        return view('admin/stamps/vstamps', compact(['adminprofile','stampstable']));
    }
    public function veditstampPageF($id){
        $check = allStampDocsModel::find($id);
        $admintable = adminAuthModel::get();
        if ($admintable->isNotEmpty()) {
            $adminprofile = $admintable->first()->image;
        } else {
            $adminprofile = null;
        }
        $id = $check->id;
        $name = $check->name;
        $email = $check->email;
        $image = $check->image;
        return view('admin/stamps/editstamp', compact(['adminprofile','id','name','image','email']));
    }
}
