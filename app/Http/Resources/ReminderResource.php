<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ReminderResource extends JsonResource
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
            'user_id' => $this->user_id,
            'medicine_name' => $this->medicine_name,
            'dose_unit' => $this->dose_unit,
            'dose_quantity' => $this->dose_quantity,
            'reminder_repeat_info' => $this->reminder_repeat_info,
            'reminder_time' => $this->reminder_time,
            'created_at' => (string) $this->created_at,
            'updated_at' => (string) $this->updated_at,
        ];
    }
}
