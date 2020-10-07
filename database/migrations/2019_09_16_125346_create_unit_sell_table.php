<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitSellTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_sell', function (Blueprint $table) {
            $table->bigIncrements('UNIT_SELL_ID');
			$table->integer('SPONSOR_ID');
			$table->string('REGISTRATION_NO');
            $table->integer('UNIT');
            $table->float('RATE', 8, 2);
            $table->double('TOTAL_AMOUNT', 10, 2);
            $table->string('SALE_NO');
            $table->string('DP_INST_FLAG')->default('N');
            $table->string('DP_TRAN_CONF_FLAG')->default('N');
            $table->string('PAY_CLR_FLAG')->default('N');
            $table->string('DP_INST_DATE')->nullable();
            $table->string('DP_TRAN_CONF_DATE')->nullable();
			$table->string('PAY_CLR_DATE')->nullable();
            $table->string('SALES_PERSON_ID');
            $table->integer('SALESCENTER_ID');
			$table->string('MODE_PAY');
            $table->string('MB_NO')->nullable();
			$table->string('MB_DATE')->nullable();
			$table->string('BANK')->nullable();
            $table->integer('OPS_ID')->nullable();
            $table->integer('ACC_ID')->nullable();
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
        Schema::dropIfExists('unit_sell');
    }
}
