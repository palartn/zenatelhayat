<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubPayment extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "sub_payments"; 
}
