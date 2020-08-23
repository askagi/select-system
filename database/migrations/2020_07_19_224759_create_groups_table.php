<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('modality_id');

            $table->string('name');
            $table->string('description')->nullable();
            $table->string('local')->nullable();
            $table->integer('num_students')->nullable();
            $table->decimal('price', 10, 2);
            $table->timestamps();

            $table->foreign('modality_id')->references('id')->on('modalities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
