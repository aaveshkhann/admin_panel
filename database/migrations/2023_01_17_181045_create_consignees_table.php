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
        Schema::create('consignees', function (Blueprint $table) {
            $table->id();
            $table->integer('Consignee_id');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->integer('postal_zip');
            $table->string('state');
            $table->bigInteger('contact');
            $table->bigInteger('telephone')->nullable();
            $table->string('ext')->nullable();
            $table->string('email')->nullable();
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('consignees');
    }
};
