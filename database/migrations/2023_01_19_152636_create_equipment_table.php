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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->string('owner_first_name');
            $table->string('owner_last_name');
            $table->string('unit_number');
            $table->string('make');
            $table->string('type')->nullable();
            $table->string('year');
            $table->string('vin');
            $table->string('plate_number');
            $table->string('plate_exp');
            $table->string('mileage')->nullable();
            $table->string('truck')->nullable();
            $table->string('trailer')->nullable();
            $table->string('province')->nullable();
            $table->string('axels')->nullable();
            $table->string('fuel_type')->nullable();
            $table->string('weight')->nullable();
            $table->date('start_date');
            $table->date('deactivation_date')->nullable();
            $table->date('dot_date');
            $table->string('ifta_truck')->nullable();
            $table->date('annual_date');
            $table->string('days_inspection_date');
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
        Schema::dropIfExists('equipment');
    }
};
