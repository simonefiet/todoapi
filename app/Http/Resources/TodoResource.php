<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TodoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        /* Return all data to array
        return parent::toArray($request); */

        //Return only name and status
        return [
            'name' => $this->name,
            'status' => $this->status
        ];

    }
}
