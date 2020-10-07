<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAplctryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('APPLICANT_COUNTRY', function (Blueprint $table) {
            $table->bigIncrements('APPLICANT_COUNTRY_ID');
            $table->string('APPLICANT_COUNTRY_NAME');
            $table->string('APPLICANT_COUNTRY_CODE');
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
        Schema::dropIfExists('APPLICANT_COUNTRY');
    }
}
