<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Patient extends Model
{
    use HasFactory, SoftDeletes;


    protected $table = "patients";
    protected $guarded = [];

    protected $appends = ['full_name'];

    public function files()
    {
        return $this->hasMany(File::class);
    }
    public function appointments()
    {
        return $this->hasMany(Appointment::class,'patient_id','id');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class,'patient_id','id');
    }


    public function getFullNameAttribute()
    {
        return "{$this->patient_fname} {$this->patient_sname} {$this->patient_tname} {$this->patient_lname}";
    }


}
