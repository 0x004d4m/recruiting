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
        Schema::create('candidate_academic_achievements', function (Blueprint $table) {
            $table->id();
            $table->string('institution_name')->nullable();
            $table->string('college_faculty')->nullable();
            $table->string('city_state_country')->nullable();
            $table->string('degree')->nullable();
            $table->string('major')->nullable();
            $table->string('minor')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidate_academic_achievements');
    }
};
