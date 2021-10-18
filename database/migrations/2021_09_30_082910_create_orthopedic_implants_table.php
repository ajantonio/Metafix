<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrthopedicImplantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orthopedic_implants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image')->nullable();
            $table->longText('description');
            $table->integer('screw_types_id')->nullable();
            $table->integer('screw_grades_id')->nullable();
            $table->integer('plate_types_id')->nullable();
            $table->integer('plate_grades_id')->nullable();
            $table->integer('price')->nullable();
            $table->string('diameter', 45)->nullable();
            $table->string('length', 45)->nullable();
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
        Schema::dropIfExists('orthopedic_implants');
    }
}
