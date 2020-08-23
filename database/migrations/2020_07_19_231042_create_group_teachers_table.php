<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_teachers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('group_id');
            $table->unsignedBigInteger('teacher_id');
            
            $table->timestamps();

            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');;
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('group_teachers');
    }
}
