<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customers;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class custcont extends Controller
{
     function customer (Request $request)
    {
        return view('cust');
    
    }

    function Custinser (Request $request)
    {
        $customerExists = DB::table('customers')
    ->where('Cus_name', $request->input('Cus_name'))
    ->exists();

if ($customerExists) {
    // Customer exists
    Alert::warning('Customer name is exists');
    return redirect()->back();} else {
    // Customer does not exist
 $cust = new customers;
    $cust->Cus_name = $request->input('Cus_name');
    $cust->Cus_email = $request->input('Cus_email');
    $cust->Cus_tel = $request->input('Cus_tel');
    $cust->Cus_spend = 0;
    $cust->save();
    Alert::success('Success ');
    return redirect()->back();
}
       
   
    }
}
