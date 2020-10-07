<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TRUSTEEFEE_RULE', function (Blueprint $table) {
            $table->bigIncrements('TRUSTEEFEE_RULE_ID');
            $table->integer('SPONSOR_ID');
            $table->float('MAXLIMIT', 7, 4);
            $table->integer('PAYMENT_TERM_FLAG')->comment('1 - Monthly , 2 - Quarterly , 3 - Half Yearly & 4 - Annualy');
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
        Schema::dropIfExists('TRUSTEEFEE_RULE');
    }
}
