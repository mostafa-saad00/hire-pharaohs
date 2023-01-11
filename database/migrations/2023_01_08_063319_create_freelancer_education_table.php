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
        Schema::create('freelancer_education', function (Blueprint $table) {
            $table->id();

            $table->foreignId('freelancer_id')->constrained();
            $table->string('university');
            $table->unsignedInteger('year_of_graduate');
            $table->string('Specialization');
            $table->text('details');

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
        Schema::dropIfExists('freelancer_education');
    }
};
