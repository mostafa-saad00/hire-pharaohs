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
        Schema::create('freelancer_service', function (Blueprint $table) {
            $table->id();

            $table->foreignId('freelancer_id')->constrained();
            $table->foreignId('service_id')->constrained();
            $table->string('price_unit');
            $table->unsignedInteger('price_rate');
            
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
        Schema::dropIfExists('freelancer_services');
    }
};
