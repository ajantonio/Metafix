<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id')->nullable();
            $table->integer('orthopedic_implants_plate_types_id')->nullable();
            $table->integer('orthopedic_implants_plate_grades_id')->nullable();
            $table->integer('plate_qty');
            $table->integer('orthopedic_implants_screw_types_id')->nullable();
            $table->integer('orthopedic_implants_screw_grades_id')->nullable();
            $table->integer('screw_qty');
            $table->date('surgery_date');
            $table->time('surgery_time');
            $table->integer('hospital_addresses_id')->nullable();
            $table->integer('hospital_addresses_hospital_cities_id')->nullable();
            $table->integer('total_price');
            $table->integer('orthopedic_technicians_id')->nullable();
            $table->integer('orthopedic_implants_id')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
