<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradeInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trade_info', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('fund_id');
            $table->string('broker_code');
            $table->integer('stock_id');
            $table->string('fund_code');
            $table->string('bo_id');
            $table->string('short_name');
            $table->string('isin');
            $table->string('type');
            $table->string('OrderNo');
            $table->string('ContractNo');
            $table->string('market');
            $table->string('category');
            $table->string('trade_time');
            $table->string('trade_date');
            $table->integer('quantity');
            $table->float('rate', 8, 2);
            $table->float('total_amount', 10, 2);
            $table->float('broker_commission', 10, 2);
            $table->string('trader_no');
            $table->string('spot_status');
            $table->integer('status');
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
        Schema::dropIfExists('trade_info');
    }
}
