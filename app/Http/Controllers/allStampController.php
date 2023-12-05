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
}
