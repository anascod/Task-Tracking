<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class invoice extends Controller
{
    function Invoice (Request $request,$bayan)
    { 

        $job = DB::table('newjob')->select()->where('bayan_no',$bayan)->get();
        $cont = DB::table('containers')->select()->where('bayan_no',$bayan)->count();
        $pay = DB::table('peyments')->select()->where('bayan_no',$bayan)->get();

        return view('invoice',['job'=>$job,'cont'=>$cont,'pay'=>$pay]);
    }

    }
