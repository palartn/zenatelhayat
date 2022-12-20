<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SurgerykindResource extends JsonResource
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
           'name' => $this->name,
           'surgery_kind_id' => $this->parent->name,
          // 'surgery_kind_name' => $this->surgery_kind->name,
          //'surgery_kind_id' => $this->surgery_kind_child->name

        ];
    }
}
