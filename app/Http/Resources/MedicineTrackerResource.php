<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MedicineTrackerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'medicine_name' => $this->medicine_name,
            'user_id' => $this->user_id,
            'date' => $this->date,
            'time' => $this->time,
            'intake_quantity' => $this->intake_quantity,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];    }
}
