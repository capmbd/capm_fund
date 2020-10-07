<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentAreaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AGENT_AREA', function (Blueprint $table) {
            $table->bigIncrements('AGENT_AREA_ID');
            $table->integer('DISTRICT_ID');
            $table->string('AGENT_AREA');
            $table->string('AREA_CODE_ALPHA');
            $table->integer('AREA_CODE');
            $table->integer('AREA_CODE_NUM');
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
        Schema::dropIfExists('AGENT_AREA');
    }
}
