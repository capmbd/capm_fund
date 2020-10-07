<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('DIVIDEND_SETUP', function (Blueprint $table) {
            $table->bigIncrements('DVS_ID');
            $table->integer('FUND_ID');
            $table->double('FACE_VALUE', 14, 2);
            $table->double('DIVIDEND', 14, 2);
            $table->double('INDV_INC_TAX', 14, 2);
            $table->double('INST_INC_TAX', 14, 2);
            $table->double('MF_INC_TAX', 14, 2)->default(0);
            $table->double('TAX_MARGIN', 14, 2);
            $table->date('TC_DATE');
            $table->date('TCIP_DATE');
            $table->double('NET_PROFIT', 14, 2);
            $table->double('EARNINGS_PER_UNIT', 14, 2);
            $table->date('APRV_DATE');
            $table->date('YED');
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
        Schema::dropIfExists('DIVIDEND_SETUP');
    }
}
