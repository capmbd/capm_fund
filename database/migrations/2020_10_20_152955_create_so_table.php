<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_order', function (Blueprint $table) {
            $table->bigIncrements('SELLORDER_ID');
            $table->integer('PRO_REG_ID');
            $table->date('TRADE_DATE');
            $table->integer('BROKER_ID');
            $table->integer('STOCK_ID');
            $table->integer('QUANTITY');
            $table->float('PRICE', 8, 2);
            $table->string('STATUS')->default('N');
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
        Schema::dropIfExists('sell_order');
    }
}
