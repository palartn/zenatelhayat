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
            'visit_date' => $this->visit_date,
            'payment'  => $this->payment,
            'remaining_amount' => $this->remaining_amount,
            'surgery_kind_id' => $this->surgery_kind_id,
            'surgery_kind_id_child' => $this->surgery_kind_id_child,
            'notes' => $this->notes,       
            'freez_start_date' => $this->freez_start_date,       
            'freez_end_date' => $this->freez_end_date,       
            'qty_packages' => $this->qty_packages,       
            'patient'  => $this->patient,
            'patient_number'  => $this->patient->patient_number,
            'surgery_kind'  => $this->surgery_kind,
            'full_name' => $this->patient->patient_fname .' '. $this->patient->patient_sname .' '.$this->patient->patient_tname .' '. $this->patient->patient_lname,
            'surgery_kind_name' => $this->surgery_kind->name,
            'surgery_kind_id' => $this->surgery_kind_child->name

        ];
    }
}
