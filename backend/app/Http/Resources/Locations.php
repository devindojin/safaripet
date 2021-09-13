<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Locations extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
        return [
          'id' => $this->id,  
          'location_name' => $this->location_name,
          'slug' => $this->slug
        ];
    }
}
