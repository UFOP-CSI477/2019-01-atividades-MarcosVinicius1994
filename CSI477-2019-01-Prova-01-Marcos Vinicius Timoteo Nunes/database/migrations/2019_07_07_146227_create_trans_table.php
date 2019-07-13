<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('tipo_id');
            $table->string('data');
            $table->decimal('valor');
            $table->integer('credito');
            $table->timestamps();


            $table->foreign('cliente_id')
                      ->references('id')
                      ->on('clientes');

            $table->foreign('tipo_id')
                      ->references('id')
                      ->on('tipos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trans');
    }
}
