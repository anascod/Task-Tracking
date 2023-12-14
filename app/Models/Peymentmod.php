<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peymentmod extends Model
{
    use HasFactory;
    protected $fillable = [
        'Bayan_no',
        'cus_name',
        'port_qu',
        'port_ch',
        'ter_qu',
        'ter_ch',
        'trans_qu',
        'trans_ch',
        'do_qu',
        'do_ch',
        'exten_qu',
        'exten_ch',
        'duty_qu',
        'duty_ch',
        'detention_qu',
        'detention_ch',
        'bad_qu',
        'bad_ch',
        'oth_qu',
        'oth_ch',
        'total'
    ];
        protected $table = 'peyments';
       
}
