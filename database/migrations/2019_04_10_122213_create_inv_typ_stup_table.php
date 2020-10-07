<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvTypStupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('INVESTMENT_TYPE_SETUP', function (Blueprint $table) {
            $table->bigIncrements('INVESTMENT_TYPE_SETUP_ID');
            $table->integer('PRO_REG_ID');
            $table->integer('INVESTMENT_TYPE_ID');
            $table->float('MAXLIMIT', 7, 4);
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
        Schema::dropIfExists('INVESTMENT_TYPE_SETUP');
    }
}
