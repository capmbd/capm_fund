<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SALESCENTER', function (Blueprint $table) {
            $table->bigIncrements('SALESCENTER_ID');
            $table->integer('APPLICANT_COUNTRY_ID');
            $table->integer('CURRENCY_TYPE_ID');
            $table->integer('SALESAGENT_ID');
            $table->integer('DISTRICT_ID');
            $table->integer('AGENT_AREA_ID');
            $table->string('SCID');
            $table->string('Image')->nullable();
            $table->string('password');
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
        Schema::dropIfExists('SALESCENTER');
    }
}
