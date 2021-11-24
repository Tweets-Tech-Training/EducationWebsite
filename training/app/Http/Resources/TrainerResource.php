<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TrainerResource extends JsonResource
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
            'id' => $this->id,
            'name' => $this->name,
            'email'=> $this->email,
            'specialization'=> $this->specialization,
            'mobile'=> $this->mobile,
            'password'=> $this->password,
            'image'=> $this->image,
            'gender'=> $this->gender,
            'facebook'=> $this->facebook,
            'address'=> $this->address,

        ];
    }
}
