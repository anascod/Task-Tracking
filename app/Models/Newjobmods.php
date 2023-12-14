<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newjobmods extends Model
{
    protected $fillable = [
    'Cus_name',
    'draft',
    'bayan_no',
    'whight',
    'port_name',
    'bayan_type',
    'bayan_date',
    'bayan_status',
    'bayan_coo',
    'bayan_arival',
    'bayan_do',
    'bayan_expire',
    'bayan_bl'];
    protected $table = 'newjob';

}

