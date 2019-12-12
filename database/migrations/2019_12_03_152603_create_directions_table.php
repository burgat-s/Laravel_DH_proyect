<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDirectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('provincia');
            $table->string('barrio');
            $table->string('cp');
            $table->string('calle');
            $table->integer('numero');
            $table->integer('piso')->nullable();
            $table->string('localidad');
            $table->string('departamento')->nullable();
            $table->string('entre_calles')->nullable();
            $table->integer('tel_contacto');
            $table->string('info_adicional')->nullable();
            $table->integer('estado');
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('directions');
    }
}
