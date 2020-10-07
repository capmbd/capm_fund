<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuySellCommissionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buy_sell_commission', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->integer('FUND_ID');
			$table->string('REGISTRATION_NO');
			$table->string('BUY_SELL_USER_ID');
			$table->double('TOTAL_AMOUNT', 10, 2);
			$table->float('COMMISSION_AMOUNT', 8, 2);
			$table->string('STATUS')->default('A');
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
        Schema::dropIfExists('buy_sell_commission');
    }
}
