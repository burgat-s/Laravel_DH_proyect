<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('brand');
            $table->decimal('price', 8, 2);
            $table->integer('stock');
            $table->integer('state');
            $table->string('model');
            $table->string('image');
            $table->string('description');
            $table->integer('discount');
            $table->boolean('featured');
            $table->integer('gender');
            $table->string('material');
            $table->string('band');
            $table->boolean('submersible');
            $table->string('color');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('watches');
    }
}
