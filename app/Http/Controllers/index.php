<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contmods;

use App\Models\Peymentmod;

use Illuminate\Support\Facades\DB;

use App\Models\Newjobmods;

class index extends Controller
{
     function Index (Request $request)

{ 
    $all = DB::table('newjob')->count();
    $jobnew = DB::table('newjob')->where('bayan_status','New')->count();
    $jobins = DB::table('newjob')->where('bayan_status','Inspection')->count();
    $jobfin = DB::table('newjob')->where('bayan_status','Finshed')->count();

    return view('welcome',['jobnew'=>$jobnew,'jobins'=>$jobins,'jobfin'=>$jobfin,'all'=>$all]);
}

}
