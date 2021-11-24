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
            'id' => $this->id,
            'student' => $this->student,
            'course' => $this->courses,
            'remaining_amount' =>$this->remaining_amount,
            'payment_amount'=>$this->payment_amount,
        'note'=>$this->note,

        ];
    }
}
