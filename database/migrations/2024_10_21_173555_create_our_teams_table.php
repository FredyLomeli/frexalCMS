<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOurTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('our_teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('puesto');
            $table->string('foto');
            $table->string('celular');
            $table->string('email');
            $table->string('descripcion');
            $table->string('web');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('instagram');
            $table->string('adicional1');
            $table->string('adicional2');
            $table->string('adicional3');
            $table->string('adicional4');
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
        Schema::dropIfExists('our_teams');
    }
}
