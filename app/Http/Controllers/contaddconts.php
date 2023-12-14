<?php

namespace App\Http\Controllers;

use App\Models\Contmods;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Newjobmods;
use RealRashid\SweetAlert\Facades\Alert;

class contaddconts extends Controller
{
    function Contview (Request $request,$id,$bayan)
    {
        $data = DB::table('newjob')->where('id',$id)->get();
        $cont=DB::table('containers')->where('Bayan_no',$bayan)->get();
                   
                $custom = DB::table('customers')->get();
        
                return view('contadd',compact('custom', 'data','cont'));    
    }




    function Addcont(Request $request,$bayan)
    {
        
    $conNos = $request->input('con_no');
    
    // Iterate through the input values retrieved from the request
    foreach ($conNos as $conNo) {
        if (!empty($conNo)) { // Check if the input is not empty
            $cont = new Contmods(); // Instantiate the model inside the loop for each iteration
        $cont->Coun_no = $conNo; // Adjust the input field name accordingly
        $cont->Bayan_no = $bayan;
    
        // Save the model to the database
        $cont->save();
    }    }

        Alert::success('Success');
    
        return redirect()->back();
     
}

function Deletcont($id)
{
    $data = Contmods::findOrFail($id);

    // Delete the record
    $data->delete();
    Alert::success('Success Deleted ');
    
    return redirect()->back();
}


} 
