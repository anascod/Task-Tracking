<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class jobde extends Controller
{
    function Jobde (Request $request)
    { 
        
           
        $bayan = DB::table('newjob')->get();

        return view('jobdet',['bayan'=>$bayan]);
    }
    }
