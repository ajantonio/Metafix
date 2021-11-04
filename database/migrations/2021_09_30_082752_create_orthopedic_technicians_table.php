<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrthopedicTechniciansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orthopedic_technicians', function (Blueprint $table) {
            $table->id();
            $table->string('name', 45);
            $table->string('email', 255);
            $table->string('image')->nullable();
            $table->string('contact_number', 45);
            $table->enum('status', ['On hold', 'Working'])->nullable();
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
        Schema::dropIfExists('orthopedic_technicians');
    }
}
