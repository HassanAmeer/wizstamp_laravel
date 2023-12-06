<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wizUsersModel;
use App\Models\adminAuthModel;
use App\Http\Controllers\Controller;

class wizUsersController extends Controller
{
    public function getWizUsersF(){
        $wizusers = wizUsersModel::orderBy('id', 'desc')->get();
        $admintable = adminAuthModel::get();
        if ($admintable->isNotEmpty()) {
            $adminprofile = $admintable->first()->image;
        } else {
            $adminprofile = null;
        }
        if(!$wizusers->count() > 0){
            $wizusers = $wizusers;
        }
        return view('admin/users/vusers', compact(['adminprofile','wizusers']));
    }
    ///////////// delete user by id
    public function deleteUsersF($id){
        // dd($id);

        $check = wizUsersModel::find($id);
        $wizusers = wizUsersModel::orderBy('id', 'desc')->get();
        $admintable = adminAuthModel::get();
        if ($admintable->isNotEmpty()) {
            $adminprofile = $admintable->first()->image;
        } else {
            $adminprofile = null;
        }
        if(!$wizusers->count() > 0){
            $wizusers = $wizusers;
        }

        if($check){
            $check->delete();
        }
        return redirect('wizostamp/vusers')->with(['adminprofile' => $adminprofile, 'wizusers' => $wizusers])->with('greentoast', 'User is Deleted.');
    }
    ///////////// View edit user by id
    public function veditUserPageF(Request $req){
        // dd($req->id);
        $check = wizUsersModel::find($req->id);
        $admintable = adminAuthModel::get();
        if ($admintable->isNotEmpty()) {
            $adminprofile = $admintable->first()->image;
        } else {
            $adminprofile = null;
        }
       $id = $check->id;
       $name = $check->name;
       $phone = $check->phone;
       $email = $check->email;
       $image = $check->image;
       return view('admin/users/edituser', compact(['id','name','phone','email','image','adminprofile']));

        // return redirect('wizostamp/vusers')->with(['adminprofile' => $adminprofile, 'wizusers' => $wizusers])->with('greentoast', 'User is Deleted.');
    }
    ///////////// edit user by id
    public function editUserF(Request $req){
        // dd($req->id);
        $check = wizUsersModel::find($req->id);
        $wizusers = wizUsersModel::orderBy('id', 'desc')->get();
        $admintable = adminAuthModel::get();
        if ($admintable->isNotEmpty()) {
            $adminprofile = $admintable->first()->image;
        } else {
            $adminprofile = null;
        }
        /////////////////////////////// 
        if ($req->hasFile('profile')) {
            $doc = $req->file('profile');
           $docname = time() . '.' . $doc->getClientOriginalExtension();
           $doc->move(public_path('icons'), $docname);
           $user_profile = 'icons/'.$docname;
       }else {
           $user_profile = $check->image;
       }
       if($req->password){
        $check->update([
            'image' => $user_profile,
            'phone' => $req->phone,
            'name' => $req->name,
            'email' => $req->email,
            'password' => $req->password,
        ]);
       }else{
        $check->update([
            'image' => $user_profile,
            'phone' => $req->phone,
            'name' => $req->name,
            'email' => $req->email,
        ]);
       }
       

        return redirect('wizostamp/vusers')->with(['adminprofile' => $adminprofile, 'wizusers' => $wizusers])->with('greentoast', 'User Updated.');
    }
}


// $Property_For_Sell = [
//     "all data from json",
//     ////// seller/dealar information
//     // "id" => 'username',
//     "name" => 'username',
//     "phone number" => 'phone number',
//     "cnic" => 'cnic',
//     "Business Address" => 'Business Address',
//     "office name" => 'office name',
//     "Comission Amount" => 'Comission Amount',
//     "Final Price Of Property" => 'Final Price Of Property',
//     /////////////// Property Location
//     "Plot Number" => 'Plot Number',
//     "Block" => 'Block',
//     "Sector" => 'Sector',
//     "Phase" => 'Phase',
//     "Society Name" => 'Society Name',
//     "City" => 'City',
//     "Zip Code" => 'Zip Code',
//     "signature image" => 'signature image',
//     /////////////// Buyer Information
//     "full Name" => 'full Name',
//     "Phone Number" => 'Phone Number',
//     "cnic" => 'cnic',
//     "Address" => 'Address',
//     "signature Image" => 'signature Image',
// ];

// $Property_For_Rent = [
//     "all data from json",
//     /////// Owner/Dealar Information
//     // "id" => 'username',
//     "name" => 'username',
//     "phone number" => 'phone number',
//     "cnic" => 'cnic',
//     "office name" => 'office name',
//     "Business Address" => 'Business Address',
//     "Comission Amount" => 'Comission Amount',
//     "Security" => 'Security',
//     "Monthly Rent" => 'Monthly Rent',
//     /////////////// Building Location
//     "Plot Number" => 'Plot Number',
//     "Block" => 'Block',
//     "Sector" => 'Sector',
//     "Phase" => 'Phase',
//     "Society Name" => 'Society Name',
//     "City" => 'City',
//     "Zip Code" => 'Zip Code',
//     "signature image" => 'signature image',
//     /////////////// Tenant Information
//     "full Name" => 'full Name',
//     "Phone Number" => 'Phone Number',
//     "cnic" => 'cnic',
//     "Address" => 'Address',
//     "signature Image" => 'signature Image',
// ];

// //////////////////////// 
// $Vechile = [
//     /////// Seller/Dealar Information
//     "name" => 'username',
//     "phone number" => 'phone number',
//     "cnic" => 'cnic',
//     "office name" => 'office name',
//     "Address" => 'Address',
//     "Comission Amount" => 'Comission Amount',
//     "Final Price Of Vehicle" => 'Final Price Of Vehicle',
//     "Vehicle Name" => 'Vehicle Name',
//     "Model" => 'Model',
//     "Registration No" => 'Registration No',
//     "Chassis No" => 'Chassis No',
//     "Engine No" => 'Engine No',
//     "Horse Power" => 'Horse Power',
//     "Describe Vehicle Condition" => 'Describe Vehicle Condition',
//     "signature image" => 'signature image',
//     /////////////// Buyer Information
//     "full Name" => 'full Name',
//     "Phone Number" => 'Phone Number',
//     "cnic" => 'cnic',
//     "Address" => 'Address',
//     "signature Image" => 'signature Image',
// ];

// //////////////////////// 
// $Electronics = [
//     //////////////// Seller Information
//     "Seller Name" => 'Seller Name',
//     "phone number" => 'phone number',
//     "cnic" => 'cnic',
//     "Device name" => 'office name',
//     "Device Model" => 'Device Model',
//     "Final Price" => 'Final Price',
//     "Guarantee Duration" => 'Guarantee Duration',
//     "Shop Name" => 'Shop Name',
//     "Shop Address" => 'Shop Address',
//     "Condition" => 'Condition',
//     "signature image" => 'signature image',
//     /////////////// Buyer Information
//     "full Name" => 'full Name',
//     "Phone Number" => 'Phone Number',
//     "cnic" => 'cnic',
//     "Address" => 'Address',
//     "signature Image" => 'signature Image',
// ];
