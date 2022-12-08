<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SurgeryKind extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "surgery_kinds"; 
}
