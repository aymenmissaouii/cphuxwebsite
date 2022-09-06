<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalarySurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salary_surveys', function (Blueprint $table) {
            $table->id();
            $table->string("jobtitle");
            $table->string("jobcategory");
            $table->string('employmenttype');
            $table->string('employmentcommitment');
            $table->string('educationinstitution');
            $table->string('education');
            $table->string('gender');
            $table->string('postalcode');
            $table->integer('yearofexperience');
            $table->double('monthlysalary');
            $table->boolean('permission');
            $table->string('timestamp');
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
        Schema::dropIfExists('salary_surveys');
    }
}
