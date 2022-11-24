<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Appointment extends Model
{
    use HasFactory, SoftDeletes;
    protected $guarded = [];
    protected $table = "appointments";


    public function patient()
    {
        return $this->belongsTo(Patient::class,'patient_id','id');
    }
    public function surgery_kind()
    {
        return $this->belongsTo(SurgeryKind::class);
    }
    public function surgery_kind_child()
    {
        return $this->belongsTo(SurgeryKind::class,'surgery_kind_id_child','id');
    }
    public function payment()
    {
        return $this->hasOne(Appointment::class);
    }



}
