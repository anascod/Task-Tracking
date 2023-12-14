<?php

namespace App\Http\Controllers;

use App\Models\customers;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class Custedit extends Controller
{
function Cused(Request $request,$id)
{
$cssfile="http://localhost/arsh/public";
    $customer = DB::table('customers')->select()->where('id',$id)->get();
    
            return view('cusedite',['customer'=>$customer,'cssfile'=>$cssfile]);

}

function Cusupdate (Request $request,$id)
{
    $data = customers::findOrFail($id);
$data->Cus_name=$request->input('cusname');
$data->Cus_email=$request->input('cusemail');
$data->Cus_tel=$request->input('csutel');
    // Update the record with the new data
    $data->update($request->all());

    Alert::success('Success Update ');
    
    return redirect()->back();

}

}
