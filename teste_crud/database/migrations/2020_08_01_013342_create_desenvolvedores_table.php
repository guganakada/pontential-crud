<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesenvolvedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desenvolvedores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->enum('sexo', ['M', 'F'])->nullable();
            $table->integer('idade')->nullable();
            $table->string('hobby')->nullable();
            $table->date('datanascimento')->nullable();
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
        Schema::dropIfExists('desenvolvedores');
    }
}
