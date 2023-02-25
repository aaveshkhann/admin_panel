<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loads', function (Blueprint $table) {
            $table->id();
            $table->integer('load_id')->nullable();
            $table->string('customer_id')->nullable();
            $table->string('customer_load');
            $table->string('load_type')->nullable();
            $table->date('date')->nullable();
            $table->date('pick_up_date');
            $table->date('delivery_date');
            $table->string('dispatch')->nullable();
            $table->string('line_haul_rate')->nullable();
            $table->string('unloading')->nullable();
            $table->string('reimburse')->nullable();
            $table->string('detention')->nullable();
            $table->string('layover')->nullable();
            $table->string('other_charges')->nullable();
            $table->string('total_rate')->nullable();
            $table->string('driver_id');
            $table->string('truck')->nullable();
            $table->string('trailer')->nullable();
            $table->string('rate')->nullable();
            $table->string('shipper_id');
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->integer('zip_code')->nullable();
            $table->string('state')->nullable();
            $table->string('weight')->nullable();
            $table->string('qty')->nullable();
            $table->integer('shipper_contact')->nullable();
            $table->text('note')->nullable();
            $table->string('consignee_id');
            $table->string('con_address')->nullable();
            $table->string('con_city')->nullable();
            $table->integer('con_zip_code')->nullable();
            $table->string('con_state')->nullable();
            $table->integer('con_contact')->nullable();
            $table->text('con_note')->nullable();
            $table->string('empty_m')->nullable();
            $table->string('loaded_m')->nullable();
            $table->string('per_mile')->nullable();
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
        Schema::dropIfExists('loads');
    }
};
