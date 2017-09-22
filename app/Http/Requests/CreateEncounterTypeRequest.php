<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateEncounterTypeRequest
 *
 * @package App\Http\Requests
 */
class CreateEncounterTypeRequest extends FormRequest
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
            'name'                  => 'string|required',
            'description'           => 'string',
            'has_strict_turn_order' => 'boolean',
            'slug'                  => 'string|required',
        ];
    }
}
