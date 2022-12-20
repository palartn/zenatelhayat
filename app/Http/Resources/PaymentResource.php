<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PaymentResource extends JsonResource
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
           // 'created_at' => $this->created_at->diffForHumans(),
            'id' => $this->id,
           //'appointment_id' => $this->appointment->appointment_id,
            'paid' => $this->paid,
            'full_name' => $this->patient->patient_fname.' '.$this->patient->patient_sname.' '.$this->patient->patient_tname.' '.$this->patient->patient_lname,
            'patient_number' => $this->patient->patient_number,
            'visit_date'=> $this->appointment->visit_date,
            'surgery_kind_id' => $this->surgery_kind_id,
          //  'surgery_kind_name' => $this->surgery_kind->name,
            'surgery_kind_id' => $this->appointment->surgery_kind->name,
            //'surgery_kind_id_child' => $this->surgery_kind_id_child,
           'notes' => $this->notes

        ];
    }
}
