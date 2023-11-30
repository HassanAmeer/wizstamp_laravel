<?php

namespace App\Http\Controllers\api;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\allStampDocsModel;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class allStampDocsApiController extends Controller
{
    public function getDocF () {
       $check = allStampDocsModel::orderBy('id', 'desc')->get();
       if($check->count() > 0){
        return response()->json([
            "status" => true,
            "data" => $check,
        ], 200);
        }else{
            return response()->json([
                "status" => false,
                "Message" => "Records is Empty",
            ], 404);
        }
    }
    ///////////// add pdf
    public function AddDocF (Request $request) {
    //    $check = allStampDocsModel::orderBy('id', 'desc')->get();
        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'doc_type' => 'required',
            'seller_name' => 'required',
            'form_creation_time' => 'required',
            'seller_submit_time' => 'required',
            'seller_doc' => 'required|mimes:pdf|max:2048',
            // 'brandimg' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'seller_doc' => 'image|mimes:jpeg,png,jpg,gif,pdf|max:2048',
       ]);
      if($validator->fails()){
       // return redirect()->back()->withErrors($validator)->withInput();
            return response()->json([
                "status" => false,
                "required fields For Upload Documents" => [
                    // 'id',
                    // 'wizid',
                    // 'islocked',
                    'user_id',
                    'doc_type',
                    'seller_name',
                    'form_creation_time',
                    'seller_submit_time',
                    'seller_doc',
                    // 'buyer_name',
                    // 'buyer_doc',
                    // 'buyer_submit_time',
                ],
                "Message" => "Required All Fields",
            ], 404);
      }else{
       if ($request->hasFile('seller_doc')) {
            $doc = $request->file('seller_doc');
           $docname = time() . '.' . $doc->getClientOriginalExtension();
           $doc->move(public_path('docs'), $docname);
           $seller_doc = 'docs/'.$docname;
       }else {
           $seller_doc = 'icons/notfound.jpg';
       }
        //   if ($request->hasFile('buyer_doc')) {
        //        $doc = $request->file('buyer_doc');
        //       $docname = time() . '.' . $doc->getClientOriginalExtension();
        //       $doc->move(public_path('images/docs'), $docname);
        //       $buyer_doc = 'images/docs/'.$docname;
        //   }else {
        //       $buyer_doc = 'images/web/notfound.jpg';
        //   }

       $genwizid = strtoupper(Str::random(10));
       $check = allStampDocsModel::create([
           'wizid' => $genwizid,
           'islocked' => false,
           'doc_type' => "electronics",
           'user_id' => $request->user_id,
           'seller_name' => $request->seller_name,
           'form_creation_time' => $request->form_creation_time,
           'seller_submit_time' => $request->seller_submit_time,
           'seller_doc' => $seller_doc,
        //    'buyer_name' => $request->buyer_name,
        //    'buyer_doc' => $buyer_doc,
        //    'buyer_submit_time' => $request->buyer_submit_time,
       ]);

       if($check){
        return response()->json([
            "status" => true,
            "Message" => "Document Uploaded",
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
