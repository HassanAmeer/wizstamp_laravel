<?php

namespace App\Http\Controllers;

use App\Models\settinsModel;
use Illuminate\Http\Request;
use App\Models\adminAuthModel;
use App\Http\Controllers\Controller;

class settingsController extends Controller
{
    public function vSettingsF (){
        // doc_expire_time
       $getSettings = settinsModel::first();
       $expireTime = $getSettings->doc_expire_time ?? "00:00:00";
       $admintable = adminAuthModel::get();
       if ($admintable->isNotEmpty()) {
           $adminprofile = $admintable->first()->image;
        } else {
            $adminprofile = null;
        }
        return view('admin/settings/setting', compact(['adminprofile']));
    }
}
