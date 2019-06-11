<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MissionCreateRequest extends FormRequest
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
        /*return [
            'nom_mission' => 'required', 
            'auteur_mission' => 'required', 
            'map_mission' => 'required', 
            'nombre_slots_mission' => 'required|numeric',
            'duree_estimee_mission' => 'nullable|numeric',
            'type_mission' => 'required|string'
        ];*/

        return [
            'nom_mission' => 'required',
            'auteur_mission' => 'required',
            'map_mission' => 'required',
            'composante_mission' => 'required',
            'nombre_slots_mission' => 'required|numeric',
            'zeus_mission' => 'required',
            'briefing_mission' => 'required',
            'hostile_mission' => 'required',
            'duree_estimee_mission' => 'required|numeric',
            'statut_mission' => 'required',
            'nombre_jouer_mission' => 'required|numeric',
            'type_mission' => 'required'
        ];
    }
}
