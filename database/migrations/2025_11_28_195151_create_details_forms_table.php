<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('details_forms', function (Blueprint $table) {
            $table->id();
            $table->string('name');             // La etiqueta (ej: "Teléfono")
            $table->string('type');             // "text" o "select"
            $table->text('values')->nullable(); // Opciones separadas por coma (solo para select)
            $table->boolean('visible')->default(true);
            $table->integer('order')->default(0);
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
        Schema::dropIfExists('details_forms');
    }
}
