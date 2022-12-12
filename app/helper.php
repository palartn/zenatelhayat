<?php

use App\Models\Appointment;
use App\Models\Payment;

function total_paid($patient)
{

    $amount_befor_discount=Appointment::where('patient_id',$patient)->sum('amount_before_discount');
    $paid=Payment::where('patient_id',$patient)->sum('paid');
    $total_amount=$amount_befor_discount-$paid;
    return  $total_amount;

}
