<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReminderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'medicine_name' => 'required|max:255',
            'dose_unit' => 'required|max:255',
            'dose_quantity' => 'required|max:255',
            'reminder_repeat_info' => 'required|max:255',
            'reminder_time' => 'required',
        ];
    }
}
