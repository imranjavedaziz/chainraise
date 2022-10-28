<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'email' => $this->email,
            'name' => $this->name,
            'middle_name' => $this->userDetail->middle_name,
            'last_name' => $this->userDetail->last_name,
            'title' => $this->userDetail->title,
            'phone' => $this->phone,
            'dob' => $this->userDetail->dob,
            'photo' => $this->getFirstMediaUrl('profile_photo', 'thumb'),
            'address' => $this->userDetail->address,
            'suit' => $this->userDetail->suit,
            'city' => $this->userDetail->city,
            'state' => $this->userDetail->state,
            'zip' => $this->userDetail->zip,
            'agree_consent_electronic' => $this->agree_consent_electronic,
            'created_at'=>$this->created_at
        ];

    }
}
