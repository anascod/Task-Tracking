<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\index;
use App\Http\Controllers\Adjob;
use App\Http\Controllers\custcont;
use App\Http\Controllers\jobedit;
use App\Http\Controllers\Custdata;
use App\Http\Controllers\contaddconts;
use App\Http\Controllers\invoicetabel;
use App\Http\Controllers\Peymentcon;
use App\Http\Controllers\Editpatcon;
use App\Http\Controllers\jobde;
use App\Http\Controllers\Custedit;
use App\Http\Controllers\invoice;
use App\Models\Customers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/', [index::class, 'Index'])->name('welcome');

    //////////addjon
    Route::get('/Adjob', [Adjob::class, 'Adjob'])->name('Adjob');
    Route::patch('/Adjob', [Adjob::class, 'Custfetch'])->name('Custfetch');
    Route::post('/insjob', [Adjob::class, 'insjob'])->name('insjob');


    //////////////Customer////////
    Route::get('/cust', [custcont::class, 'customer'])->name('customer');
    Route::post('/cust', [custcont::class, 'Custinser'])->name('Custinser');
    Route::get('/Cused/{id}', [Custedit::class, 'Cused'])->name('Cused');
    Route::post('/Cusupdate/{id}', [Custedit::class, 'Cusupdate'])->name('Cusupdate');
    Route::get('/custdata', [Custdata::class, 'Custtable'])->name('custdata');
    Route::match(['get', 'delete'], '/Cusdelet/{id}', [Custdata::class, 'Cusdelet'])->name('Cusdelet');
    


    Route::get('/contadd/{id}/{bayan}', [contaddconts::class, 'Contview'])->name('Contview');
    Route::post('contadd/{bayan}', [contaddconts::class, 'Addcont'])->name('Addcont');
    
    
    Route::get('/jobdet', [jobde::class, 'Jobde'])->name('jobdet');
    Route::post('/Addcont/{bayan}', [contaddconts::class, 'Addcont'])->name('Addcont');


    Route::match(['get', 'delete'], '/Deletcont/{id}', [contaddconts::class, 'Deletcont'])->name('Deletcont');

    Route::get('/jobedit/{id}/{bayan}', [jobedit::class, 'Jobedit'])->name('Jobedit');
    
    Route::post('/Updatadata/{id}/{bayan}', [jobedit::class, 'Updatadata'])->name('Updatadata/');


    Route::get('/invoice/{bayan}', [invoice::class, 'Invoice'])->name('invoice');
    Route::get('/invoiceteb', [invoicetabel::class, 'Showinvo'])->name('Showinvo');
    Route::get('/peyment/{bayan}/{cusname}', [Peymentcon::class, 'PeymentShow'])->name('peyment');
    Route::post('/peyment/{bayan}/{cusname}', [Peymentcon::class, 'Payinsert'])->name('Payinsert');
    Route::match(['get', 'delete'], '/invoiceteb/{id}/', [invoicetabel::class, 'Deletpay'])->name('Deletpay');
    Route::match(['get', 'delete'], '/editpay/{id}/', [Editpatcon::class, 'Editepayshow'])->name('Editepayshow');
    Route::post('/editpay/{id}', [Editpatcon::class, 'Updatepay'])->name('Editpatcon');


});

require __DIR__.'/auth.php';
