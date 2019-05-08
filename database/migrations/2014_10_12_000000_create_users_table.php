<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('user_pseudo')->unique();
            $table->string('user_mdp');
            $table->string('email')->unique();
            $table->string('user_avatar')->default('/users/avatar/default.jpg');
            $table->boolean('user_valide')->default(false);
            $table->integer('user_rang')->default(1);
            $table->integer('user_post')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
