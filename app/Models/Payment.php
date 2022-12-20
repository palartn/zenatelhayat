<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $guarded = [];

 public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
 public function appointment()
    {
        return $this->belongsTo(Appointment::class)->withDefault();
    }
 public function surgery_kind()
    {
        return $this->belongsTo(SurgeryKind::class)->withDefault();
    }

   
}
