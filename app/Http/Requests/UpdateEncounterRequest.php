<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEncounterRequest extends FormRequest
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
            'parent_id'             => 'numeric',
            'is_public'             => 'boolean',
            'encounter_type_id'     => 'numeric',
            'encounter_location_id' => 'numeric',
        ];
    }
}
