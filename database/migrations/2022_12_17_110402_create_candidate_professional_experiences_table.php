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
        Schema::create('candidate_professional_experiences', function (Blueprint $table) {
            $table->id();
            $table->string('job_title')->nullable();
            $table->string('full_legal_name_of_employer')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('immediate_supervisor')->nullable();
            $table->string('immediate_supervisor_phone_number')->nullable();
            $table->string('immediate_supervisor_email')->nullable();
            $table->string('how_many_employees_did_you_supervise')->nullable();
            $table->string('physical_address_of_employer')->nullable();
            $table->string('city_state_country')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('employer_official_website')->nullable();
            $table->text('duties_and_responsibilities')->nullable();
            $table->text('achievements')->nullable();
            $table->text('recommendation_letter1')->nullable();
            $table->text('recommendation_letter2')->nullable();
            $table->text('recommendation_letter3')->nullable();
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
        Schema::dropIfExists('candidate_professional_experience');
    }
};
