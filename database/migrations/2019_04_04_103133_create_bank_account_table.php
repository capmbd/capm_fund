<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('BANK_ACCOUNT', function (Blueprint $table) {
            $table->bigIncrements('BANK_ACCOUNT_ID');
            $table->integer('BANK_ID');
            $table->integer('SPONSOR_ID');
            $table->string('ACCOUNT_NAME');
            $table->string('BRANCH');
            $table->string('ACCOUNT_NO');
            $table->string('ROUTING_NO')->nullable();
            $table->integer('ACCOUNT_TYPE')->comment('1 - Current Account , 2 - Short Term Deposit , 3 - Savings Account, 4 - Escrow ');
            $table->double('BANK_AMOUNT', 14, 2)->default(0);
            $table->float('INTEREST_RATE', 8, 2);
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
        Schema::dropIfExists('BANK_ACCOUNT');
    }
}
