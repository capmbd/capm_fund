<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortRegTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PORTFOLIO_REGISTRATION', function (Blueprint $table) {
            $table->bigIncrements('PRO_REG_ID');
            $table->integer('SPONSOR_ID');
            $table->string('PORTFOLIO_NAME');
            $table->integer('PORTFOLIO_TYPE_ID');
            $table->string('SYMBOL');
            $table->integer('FACEVALUE');
            $table->integer('ASSET_MANAGER_ID');
            $table->integer('CUSTODIAN_ID');
            $table->integer('TRUSTEE_ID');
            $table->integer('LOT_SIZ_INDI');
            $table->integer('LOT_SIZ_INST');
            $table->bigInteger('INI_FUND_SIZ');
            $table->date('APPL_START_DATE');
            $table->date('APPL_END_DATE');
            $table->integer('GEN_INV_LKIN_DAY');
            $table->integer('SPN_INV_LKIN_DAY');
            $table->date('FUND_START_DATE');
            $table->date('FUND_CLOSE_DATE')->nullable();
            $table->integer('INDV_SUBS');
            $table->integer('INST_SUBS');
            $table->float('COMMISSION', 8, 2);
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
        Schema::dropIfExists('PORTFOLIO_REGISTRATION');
    }
}
