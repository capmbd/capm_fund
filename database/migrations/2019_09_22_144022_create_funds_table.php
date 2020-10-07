<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFundsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funds', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('REGISTRATION_NO');
			$table->integer('FUND_ID');
			$table->integer('BUY_PADDING_UNIT')->default(0);
			$table->integer('TOTAL_UNITS');
			$table->float('AVG_RATE', 8, 2);
			$table->double('TOTAL_AMOUNT', 10, 2);
			$table->integer('SELL_PADDING_UNIT')->default(0);
			$table->integer('BLOCK_UNITS')->default(0);
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
        Schema::dropIfExists('funds');
    }
}
