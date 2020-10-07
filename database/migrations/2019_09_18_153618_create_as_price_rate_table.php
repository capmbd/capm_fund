<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsPriceRateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('price_rate', function (Blueprint $table) {
            $table->bigIncrements('PRICE_RATE_ID');
            $table->integer('PRO_REG_ID');
            $table->float('BUY_RATE', 8, 2);
            $table->float('SELL_RATE', 8, 2);
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
        Schema::dropIfExists('price_rate');
    }
}
