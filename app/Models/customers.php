<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    use HasFactory;
    protected $fillable = ['Cus_name', 'Cus_email', 'Cus_tel','Cus_spend'];
    protected $table = 'customers';

}
