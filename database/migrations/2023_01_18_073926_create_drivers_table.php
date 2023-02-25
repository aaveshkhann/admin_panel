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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->integer('driver_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->integer('postal_zip');
            $table->string('telephone');
            $table->string('email');
            $table->date('dob');
            $table->string('ssn');
            $table->string('insurance');
            $table->string('insurance_truck');
            $table->string('ifta_service');
            $table->string('account_holder');
            $table->string('license_number');
            $table->string('license_exp');
            $table->string('medical_date');
            $table->string('medical_exp');
            $table->string('drug_test');
            $table->string('pay_type');
            $table->string('per_mile')->nullable();
            $table->string('empty_mile')->nullable();
            $table->string('percentage');
            $table->string('status')->nullable();
            $table->text('notes')->nullable();
            $table->string('prepass');
            $table->string('load_board');
            $table->string('trailer_rent');
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
        Schema::dropIfExists('drivers');
    }
};
