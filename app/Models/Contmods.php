<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contmods extends Model
{
    use HasFactory;
    protected $fillable = ['Coun_no', 'Bayan_no'];
    protected $table = 'containers';
}
