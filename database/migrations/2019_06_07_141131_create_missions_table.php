<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('missions', function (Blueprint $table) {
            $table->increments('id_mission');
            $table->string('nom_mission');
            $table->string('auteur_mission');
            $table->string('map_mission');
            $table->integer('nombre_slots_mission');
            $table->string('correction_mission')->nullable()->default('Aucune');
            $table->string('zeus_mission')->nullable()->default('Non');
            $table->text('briefing_mission');
            $table->string('hostile_mission')->default('Hostiles a saisir');
            $table->tinyinteger('duree_estimee_mission')->default(0);
            $table->string('statut_mission', 20)->default('A tester');
            $table->string('nombre_jouer_mission')->default(0);
            $table->string('type_mission');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('missions');
    }
}
