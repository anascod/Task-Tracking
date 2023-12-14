<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\customers;

use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class Custdata extends Controller
{
function Custtable()
{
    $bayan = DB::table('customers')->get();

    return view('custdata',['bayan'=>$bayan]);

}

function Cusdelet($id)
{
    $data = customers::findOrFail($id);

    // Delete the record
    $data->delete();
    Alert::success('Success Deleted ');
    
    return redirect()->back();
}
}
