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
            $table->unsignedInteger('user_id')->nullable();
            $table->string('reference_id')->nullable();
            $table->date('surgery_date')->nullable();
            $table->time('surgery_time')->nullable();
            $table->integer('hospital_cities_id')->nullable();
            $table->integer('hospital_addresses_id')->nullable();
            $table->string('assigned_technician', 45);
            $table->string('technician_contact_number', 45);
            $table->text('cart');
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
