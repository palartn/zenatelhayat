<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ExpenseResource extends JsonResource
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
            'paied_for' => $this->paied_for,
            'amount' => $this->amount,
            'currency' => $this->currency,
            'pay_date' => $this->pay_date,
            'notes' => $this->notes,           
        ];
    }
}
