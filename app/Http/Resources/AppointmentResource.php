<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AppointmentResource extends JsonResource
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
            'next_visit_date' => $this->next_visit_date,
            'surgery_kind_id_child' => $this->surgery_kind->name,
            'surgery_kind_id' => $this->surgery_kind_child->name,
            'notes' => $this->notes,
            'freez_start_date' => $this->freez_start_date,
            'freez_end_date' => $this->freez_end_date,
            'qty_packages' => $this->qty_packages,
            'patient'  => $this->patient,
            'full_name' => $this->patient->patient_fname .' '. $this->patient->patient_sname .' '.$this->patient->patient_tname .' '. $this->patient->patient_lname,

        ];
    }
}
