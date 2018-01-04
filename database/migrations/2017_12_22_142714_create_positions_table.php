<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('salas_id')->unsigned();
            $table->foreign('salas_id')->references('id')->on('salas');
            $table->tinyInteger('a1')->default('0');
            $table->tinyInteger('a2')->default('0');
            $table->tinyInteger('a3')->default('0');
            $table->tinyInteger('b1')->default('0');
            $table->tinyInteger('b2')->default('0');
            $table->tinyInteger('b3')->default('0');
            $table->tinyInteger('c1')->default('0');
            $table->tinyInteger('c2')->default('0');
            $table->tinyInteger('c3')->default('0');
            
            
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
        Schema::dropIfExists('positions');
    }
}
