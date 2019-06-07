<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MissionUpdateRequest extends FormRequest
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

        $nom = $this->nom_mission

        return [
            'nom_mission' => 'required|unique:mission,nom_mission,' $nom, 
            'auteur_mission' => 'required', 
            'map_mission' => 'required', 
            'nombre_slots_mission' => 'required|numeric',
            'duree_estimee_mission' => 'nullable|numeric',
            'type_mission' => 'required|string'
        ];
    }
}
