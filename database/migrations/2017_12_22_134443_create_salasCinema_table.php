<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSalasCinemaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salasCinema', function (Blueprint $table) {
            $table->integer('cinemas_id',false,true)->unsigned(); // 2º arg its for autoincrement and 3º arg for unsigned
            $table->foreign('cinemas_id')->references('id')->on('cinemas')->onUpdate('cascade')->onDelete('cascade');;
            $table->integer('salas_id',false,true)->unsigned(); // 2º arg its for autoincrement and 3º arg for unsigned
            $table->foreign('salas_id')->references('id')->on('salas')->onUpdate('cascade')->onDelete('cascade');;
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
        Schema::dropIfExists('salasCinema');
    }
}
