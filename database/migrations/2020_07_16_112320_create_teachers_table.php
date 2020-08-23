<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
           // $table->unsignedBigInteger('modality_id');
            $table->string('name');
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('gender');
            $table->date('date_birth')->nullable();
            $table->string('photo')->nullable();
            $table->string('phone');
            $table->string('email')->nullable();
            $table->text('obs')->nullable();

            //Address
            $table->string('cep')->nullable();
            $table->string('street')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();

            $table->timestamps();

            //$table->foreign('modality_id')->references('id')->on('modalities');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
