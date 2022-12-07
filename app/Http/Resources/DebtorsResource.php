<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DebtorsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'created_at' => $this->created_at->diffForHumans(),
            'total_price' => $this->total_price,
            'discount'  => $this->discount,
            'remaining_amount' => $this->remaining_amount,
            'currency' => $this->currency,
            'pay_date' => $this->pay_date,
            'notes' => $this->notes,       
            //'created_at' => $this->created_at,       
            'updated_at' => $this->updated_at,          
            'patient'  => $this->patient,
            'patient_number' => $this->patient->patient_number,
            'full_name' => $this->patient->patient_fname .' '. $this->patient->patient_sname .' '.$this->patient->patient_tname .' '. $this->patient->patient_lname,  
        ];
    }
}
