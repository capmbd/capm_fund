<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDvcTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DIVIDEND_CALCULATION', function (Blueprint $table) {
            $table->bigIncrements('DVC_ID');
            $table->integer('FUND_ID');
            $table->string('REGISTRATION_NO');
            $table->string('INVESTOR_NAME');
            $table->string('INVESTOR_EMAIL');
            $table->string('BANK_NAME');
            $table->string('BANK_AC');
            $table->integer('HOLDING_UNIT');
            $table->string('DIV_TYPE');
            $table->double('FUND_VALUE', 14, 2);
            $table->double('DIVIDEND_AMOUNT', 14, 2);
            $table->double('DED_INC_TAX', 14, 2)->default(0);
            $table->integer('ENTI_CIP')->default(0);
            $table->double('PAY_FRACTIONAL', 14, 2)->default(0);
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
        Schema::dropIfExists('DIVIDEND_CALCULATION');
    }
}
