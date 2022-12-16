<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CreditorsResource extends JsonResource
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
            'visit_date' => $this->appointment->visit_date,
            'next_visit_date'  => $this->appointment->next_visit_date,
            'amount_before_discount' => $this->appointment->amount_before_discount,
            'discount_value' => $this->appointment->discount_value,
            'amount_after_discount' => $this->appointment->amount_after_discount,
            'notes' => $this->notes,
            //'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            // 'surgery_kind'  => $this->surgery_kind,
            // 'surgery_kind_id' => $this->surgery_kind_id_child,
            // 'surgery_kind_id_child' => $this->surgery_kind->surgery_kind_id_child,

            // 'surgery_kinds' => $this->surgery_kinds,
            // 'name' =>$this->surgery_kinds->name,
            'patient'  => $this->patient,
            'patient_number' => $this->patient->patient_number,
            'full_name' => $this->patient->patient_fname .' '. $this->patient->patient_sname .' '.$this->patient->patient_tname .' '. $this->patient->patient_lname,
        ];
    }
}
