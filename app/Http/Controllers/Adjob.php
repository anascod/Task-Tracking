<?php

namespace App\Http\Controllers;
use App\Models\customers;
use App\Models\Contmods;
use App\Models\Newjobmods;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class Adjob extends Controller
{
function Adjob (Request $request)
{    $custom = DB::table('customers')->get();
    $min = 1;
    $max = 13;
    $count = 5; // Adjust the count as needed

    $draft = $this->generateDraft($min, $max, $count);
    $draftString = implode("", $draft);
    return view('Adjobs', ['custom' => $custom,'draftString' => $draftString]);

}


function insjob(Request $request)
{    $min = 1;
    $max = 13;
    $count = 5; // Adjust the count as needed

    $draft = $this->generateDraft($min, $max, $count);
    $draftString = implode("", $draft);

    $customerExists = DB::table('newjob')
    ->where('bayan_no', $request->input('bayan_no'))
    ->exists();

if ($customerExists) {
    // Customer exists
    Alert::warning('Bayan No: '.$request->input('bayan_no').' is exists');
    return redirect()->back();} 
    else {
    // Customer does not exist
 $bayan = new Newjobmods;
    $bayan->Cus_name = $request->input('Cus_name');
    $bayan->draft = $draftString;
    $bayan->bayan_no = $request->input('bayan_no');
    $bayan->whight = $request->input('whight');
    $bayan->port_name = $request->input('port_name');
    $bayan->bayan_type = $request->input('bayan_type');
    $bayan->bayan_date = $request->input('bayan_date');
    $bayan->bayan_status = $request->input('bayan_status')??'';
    $bayan->bayan_coo = $request->input('bayan_coo');
    $bayan->bayan_arival = $request->input('bayan_arival');
    $bayan->bayan_do = $request->input('bayan_do');
    $bayan->bayan_expire = $request->input('bayan_expire');
    $bayan->bayan_bl = $request->input('bayan_bl');
    $bayan->save();

$conNos = $request->input('con_no');

// Iterate through the input values retrieved from the request
foreach ($conNos as $conNo) {
    if (!empty($conNo)) { // Check if the input is not empty
        $cont = new Contmods(); // Instantiate the model inside the loop for each iteration
    $cont->Coun_no = $conNo; // Adjust the input field name accordingly
    $cont->Bayan_no = $request->input('bayan_no');

    // Save the model to the database
    $cont->save();
}    }

    Alert::success('Success');

    return redirect()->back();
}
}
public function generateDraft($min, $max, $count) {
    if ($count < 1 || $max - $min + 1 < $count) {
        // Invalid input, unable to generate draft
        return [];
    }

    $draft = range($min, $max);

    // Shuffle the draft using Fisher-Yates algorithm
    for ($i = $max; $i >= $max - $count + 1; $i--) {
        $j = random_int($min, $i);
        $temp = $draft[$i - 1];
        $draft[$i - 1] = $draft[$j - 1];
        $draft[$j - 1] = $temp;
    }

    // Return the first $count elements of the shuffled draft
    return array_slice($draft, $max - $count);
}
}
