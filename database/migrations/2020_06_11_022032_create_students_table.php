<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
        
            $table->string('name');
            $table->string('cpf');
            $table->string('rg');
            $table->string('gender');
            $table->date('date_birth');
            $table->string('photo')->nullable();
            $table->string('phone');
            $table->string('email');
            $table->text('obs')->nullable();

            //Address
            $table->string('cep');
            $table->string('street');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');

            $table->timestamps();
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
        Schema::dropIfExists('students');
    }
}
