<?php

namespace App\Http\Controllers;

use App\Models\Contmods;
use App\Models\Peymentmod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Newjobmods;
use RealRashid\SweetAlert\Facades\Alert;


class jobedit extends Controller
{
    function Jobedit ($id,$bayan)
    { 
        $data = DB::table('newjob')->where('id',$id)->get();
$cont=DB::table('containers')->where('Bayan_no',$bayan)->get();
           
        $custom = DB::table('customers')->get();

        return view('jobedit',compact('custom', 'data','cont'));
    }

    public function Updatadata(Request $request, $id,$bayan)
    {        
        $existingRecord = Contmods::where('Bayan_no', $request->input('bayan_no'))->where('id', '!=', $id)->first();      
        if($existingRecord) 
        {


            $upbayan = Newjobmods::find($id);
            $upbayan->Cus_name = $request->input('Cus_name');
            $upbayan->whight = $request->input('whight');
            $upbayan->port_name = $request->input('port_name');
            $upbayan->bayan_type = $request->input('bayan_type');
            $upbayan->bayan_date = $request->input('bayan_date');
            $upbayan->bayan_status = $request->input('bayan_status')??'';
            $upbayan->bayan_coo = $request->input('bayan_coo');
            $upbayan->bayan_arival = $request->input('bayan_arival');
            $upbayan->bayan_do = $request->input('bayan_do');
            $upbayan->bayan_expire = $request->input('bayan_expire');
            $upbayan->bayan_bl = $request->input('bayan_bl');
            $upbayan->save();


            
if ( $request->input('conte_co') !=null ) {
    # code...

foreach($request->input('conte_co') as $key => $containerNumber)
{
    if (!empty($containerNumber)) {
        $inputValue = $request->input('conte_co')[$key];
        $updateResult = Contmods::where('id', $request->input('id')[$key] )
        ->update([
            'Coun_no' => $inputValue,
            'Bayan_no' => $request->input('bayan_no')
        ]);

       
        }
}

    } 
            Alert::warning('Only Bayan No not Updated its Already exsist');

            return redirect()->back();
        
        }
      else{

        $data = DB::table('newjob')->where('id',$id)->first();


$updatecont= Contmods::where('Bayan_no',$bayan)->get();
foreach ($updatecont as $record) {
$record->Bayan_no = $request->input('bayan_no');
$record->save();
}

$updatepay= Peymentmod::where('Bayan_no',$bayan)->get();
foreach ($updatepay as $record) {

$record->Bayan_no = $request->input('bayan_no');
$record->cus_name = $request->input('Cus_name');
$record->save();
}

    $upbayan = Newjobmods::find($id);
    $upbayan->Cus_name = $request->input('Cus_name');
    $upbayan->draft = $data->draft;
    $upbayan->bayan_no = $request->input('bayan_no');
    $upbayan->whight = $request->input('whight');
    $upbayan->port_name = $request->input('port_name');
    $upbayan->bayan_type = $request->input('bayan_type');
    $upbayan->bayan_date = $request->input('bayan_date');
    $upbayan->bayan_status = $request->input('bayan_status')??'';
    $upbayan->bayan_coo = $request->input('bayan_coo');
    $upbayan->bayan_arival = $request->input('bayan_arival');
    $upbayan->bayan_do = $request->input('bayan_do');
    $upbayan->bayan_expire = $request->input('bayan_expire');
    $upbayan->bayan_bl = $request->input('bayan_bl');
    $upbayan->save();
$Bayan_no=$bayan;

if ( $request->input('conte_co') !=null ) {
    # code...

foreach($request->input('conte_co') as $key => $containerNumber)
{
    if (!empty($containerNumber)) {
        $inputValue = $request->input('conte_co')[$key];
        $updateResult = Contmods::where('id', $request->input('id')[$key] )
        ->update([
            'Coun_no' => $inputValue,
            'Bayan_no' => $request->input('bayan_no')
        ]);

       
        }
}

    }
    Alert::success('Success');
    sleep(1); // Delay for 2 seconds

    return redirect()->to('jobdet');
        }
    }
}

