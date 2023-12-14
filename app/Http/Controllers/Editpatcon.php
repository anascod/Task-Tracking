<?php

namespace App\Http\Controllers;

use App\Models\Peymentmod;
    use Illuminate\Support\Facades\DB;
    use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class Editpatcon extends Controller
{
    function Editepayshow ($id)
    {
    
        $bayans = DB::table('peyments')->select()->where('id',$id)->get();
    
        return view('editpay',['bayans'=>$bayans]);
    
    }




    function Updatepay(Request $request,$id)
    {

    
        $total= $request->input('port_qu')*$request->input('port_ch')+
        $request->input('ter_qu')*$request->input('ter_ch')
        + $request->input('trans_qu')* $request->input('trans_ch')+
         $request->input('do_qu')* $request->input('do_ch')+
         $request->input('exten_qu')*$request->input('exten_ch')+
        $request->input('duty_qu')*$request->input('duty_ch')+
        $request->input('detention_qu')*$request->input('detention_ch')+
        $request->input('bad_qu')*$request->input('bad_ch')+
        $request->input('oth_qu')*$request->input('oth_ch');
      
        $payment =  Peymentmod::find($id);
       
        $payment->port_qu = $request->input('port_qu');
        $payment->port_ch = $request->input('port_ch');
        $payment->ter_qu = $request->input('ter_qu');
        $payment->ter_ch = $request->input('ter_ch');
        $payment->trans_qu = $request->input('trans_qu');
        $payment->trans_ch = $request->input('trans_ch')??'';
        $payment->do_qu = $request->input('do_qu');
        $payment->do_ch = $request->input('do_ch');
        $payment->exten_qu = $request->input('exten_qu');
        $payment->exten_ch = $request->input('exten_ch');
        $payment->duty_qu = $request->input('duty_qu');
        $payment->duty_ch = $request->input('duty_ch');
        $payment->detention_qu = $request->input('detention_qu');
        $payment->detention_ch = $request->input('detention_ch');
        $payment->bad_qu = $request->input('bad_qu');
        $payment->bad_ch = $request->input('bad_ch');
        $payment->oth_qu = $request->input('oth_qu');
        $payment->oth_ch = $request->input('oth_ch');
        $payment->total = $total;
        $payment->update();
     
        Alert::success('Success  ');
        
        return redirect()->back();
    
    }


    }
