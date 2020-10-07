<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrncyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CURRENCY_TYPE', function (Blueprint $table) {
            $table->bigIncrements('CURRENCY_TYPE_ID');
            $table->integer('COUNTRY_ID');
            $table->string('CURRENCY_SYMBOL');
            $table->string('CURRENCY');
            $table->string('SHORTFORM');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('CURRENCY_TYPE');
    }
}
