<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnitPurchaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unit_purchase', function (Blueprint $table) {
            $table->bigIncrements('UNIT_PURCHASE_ID');
			$table->integer('SPONSOR_ID');
            $table->integer('UNIT');
            $table->float('RATE', 8, 2);
            $table->double('TOTAL_AMOUNT', 10, 2);
            $table->string('PURCHASE_NO');
            $table->string('ALLOT_REF_NO')->nullable();
            $table->string('HOUSE_CNF_REC_FLAG')->default('N');
            $table->string('HOUSE_CNF_REC_DATE')->nullable();
            $table->string('SC_CNF_FLAG')->default('N');
            $table->string('SC_CNF_DATE')->nullable();
            $table->string('PURCHASE_PERSON_ID');
            $table->string('REGISTRATION_NO');
            $table->integer('REMAINING_UNITS');
            $table->integer('SALESCENTER_ID');
			$table->string('MODE_PAY');
            $table->string('BCPODDTC_NO')->nullable();
			$table->string('BCPODDTC_DATE')->nullable();
			$table->string('BANK')->nullable();
			$table->string('INVESTOR_TYPE');
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
        Schema::dropIfExists('unit_purchase');
    }
}
