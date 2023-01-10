<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OfferingResource extends JsonResource
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
            'organization_id' => $this->organization_id,
            'name' => $this->name,
            'slug' => $this->slug,
            'min_investment' => $this->min_investment,
            'goal' => $this->goal,
            'pledged' => $this->pledged,
            'max_raise' => $this->max_raise,
            'price_per_unit' => $this->price_per_unit,
            'industry' => $this->industry,
            'disclosure' => $this->disclosure,
            'type' => $this->type,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time,
            'summary' => $this->summary,
            'short_description' => $this->short_description,
            'description' => $this->description,
            'status'=>$this->status,
            'created_at'=>$this->created_at,
            'banner' => $this->getFirstMediaUrl('banner', 'thumb'),
            'logo' => $this->getFirstMediaUrl('logo', 'thumb'),
        ];
    }
}
