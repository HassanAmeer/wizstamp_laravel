<?php

namespace App\Http\Controllers\api;
use Illuminate\Http\Request;
use App\Models\electronicsModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class electronicsApiController extends Controller
{

    
    
    // public function getElectronicsDataF (){
    //     $electronicsModelData = electronicsModel::orderBy('id', 'desc')->get();
    //  //    $electronicsModelData = electronicsModel::all();
    //     if($electronicsModelData->count() > 0){
    //         return response()->json([
    //             "status" => true,
    //             "data" => $electronicsModelData,
    //         ], 200);
    //     }else{
    //         return response()->json([
    //             "status" => false,
    //             "Message" => "Electronics Records is Empty",
    //         ], 404);
    //     }
    //  }
     
    ///////////// 
    // public function addElectronicsF (Request $request){
    //  $validator = Validator::make($request->all(), [
    //     // 'brandimg' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    //     // 'salesposttitle' => 'required',
    //     // 'salespostimage' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    //    ]);
    //   if($validator->fails()){
    // //    return redirect()->back()->withErrors($validator)->withInput();
    //         return response()->json([
    //             "status" => false,
    //             "required fields For Seller" => [
    //             // 'id',
    //             // 'wizid',
    //             // 'is_done_by_seller',
    //             // 'is_done_by_buyer',
    //             // 'is_locked',
    //             // 'type',
    //             'seller_name', 
    //             'seller_phone', 
    //             'seller_cnic', 
    //             'seller_device_name', 
    //             'seller_device_model', 
    //             'seller_device_final_price', 
    //             'guarantee_duration', 
    //             'seller_shop_name', 
    //             'seller_shop_address', 
    //             'seller_device_condition', 
    //             'seller_signature', 
    //             ////// buyer fields
    //             // 'buyer_name',
    //             // 'buyer_Phone',
    //             // 'buyer_cnic',
    //             // 'buyer_address',
    //             // 'buyer_signature',
    //             ],
        
    //             "Message" => "Required All Fields",
    //         ], 404);
    //   }else{
    //     // $electronicsModelData = electronicsModel::orderBy('id', 'desc')->get();
    //    if ($request->hasFile('seller_signature')) {
    //         $image = $request->file('seller_signature');
    //        $imagename = time() . '.' . $image->getClientOriginalExtension();
    //        $image->move(public_path('images/docs'), $imagename);
    //        $salesimagePath = 'images/docs/'.$imagename;
    //    }else {
    //        $salesimagePath = 'images/web/notfound.jpg';
    //    }

    //    $check = salespostModel::create([
    //        'wizid' => $brandid,
    //        'is_done_by_seller' => $brandimg,
    //        'is_done_by_buyer' => '0',
    //        'catgidlist' => $catgidlist,
    //        'catgnamelist' => $catgnamelist,
    //        'salespostimage' => $salesimagePath,
    //        'salesposttitle' => $request->input('salesposttitle'),
    //        'salesposttitleslug' => $getslug,
    //        'salespostshortdesc' => $request->input('salespostshortdesc'),
    //     //    'salespostdesc' => $request->input('salespostdesc'),
    //        'posttagsinpt' => $request->input('posttagsinpt'),
    //        'salespostlink' => $request->input('salespostlink'),
    //     //    'salesstartdate' => $request->input('salesstartdate'),
    //    ]);

    //    if($check){
    //        // $request->session()->flash('success', 'Category inserted successfully.');
    //        return redirect()->route('altis16/vsales')->with('successtoastmsg', 'Sales Post Added successfully.');
    //    }else{
    //        return redirect()->route('altis16/vsales')->with('faildtoastmsg', 'Something Went Wrong');
    //    }
    //   }
    //  }
}
