<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    public $table = "missions";
    public $primaryKey = "id_mission";
    public $timestamps = false;

    protected $fillable = [
    	'nom_mission',
		'auteur_mission',
		'map_mission',
		'composante_mission',
		'nombre_slots_mission',
		'correction_mission',
		'zeus_mission',
		'briefing_mission',
		'hostile_mission',
		'duree_estimee_mission',
		'statut_mission',
		'nombre_jouer_mission',
		'type_mission'
    ];
}
