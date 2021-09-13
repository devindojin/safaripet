<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Puppies extends JsonResource
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
        // return [
        //     'id'        => $this->id,
        //     'pbrd_display_name'      => $this->pbrd_display_name,
        //     'plttr_birthdate'  => $this->plttr_birthdate,
        //     'pet_gender'    => $this->pet_gender,
        //     'pstatus_name'     => $this->pstatus_name,
        //     'ptype_name'  => $this->ptype_name,
        //     'pet_currently_at_entity_id'    => $this->pet_currently_at_entity_id,
        //     'loc_receipt_name'    => $this->loc_receipt_name,
        //     'pet_image_ids'  => asset('storage/uploads/puppies/' . $this->pet_image_ids)
        // ];
    }

    public function with($request){
        return [
          'status'=>'success'
        ];
    }
}
