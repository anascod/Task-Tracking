<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Peymentmod;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class invoicetabel extends Controller
{
function Showinvo()
{
    $bayan = DB::table('newjob')->select()->get();
    $payment = DB::table('peyments')->select()->get();

    return View('invoiceteb',['bayan'=>$bayan],[ 'payment'=>$payment]);
}

function Deletpay($id)
{
    $model = Peymentmod::find($id);
    $model->delete();
    Alert::success('Success  ');
        
    return redirect()->back();
}
}
