<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tuto extends Model
{
    public $primaryKey = "id_tuto";
    public $table = "tutos";
    public $timestamps = false;

    protected $fillable = [
    	'nom_tuto','contenu'
    ];
}
