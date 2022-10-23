<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PatientResource extends JsonResource
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
            'idc' => $this->idc,
            'full_name' => $this->patient_fname.' '.$this->patient_sname.' '.$this->patient_tname.' '.$this->patient_lname,
            'patient_dob' => $this->patient_dob,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'occupation' => $this->occupation,
            'mobile_second' => $this->mobile_second,
            'address' => $this->address,
            'gender' => $this->gender,
            'notes' => $this->notes,
            'phone' => $this->phone,
            'husband_name' => $this->husband_name,
            'occupation' => $this->occupation,
            'husband_dob' => $this->husband_dob,
        ];
    }
}
