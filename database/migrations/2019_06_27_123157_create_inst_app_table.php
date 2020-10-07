<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstAppTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('INST_APP', function (Blueprint $table) {
            $table->bigIncrements('INSTAPP_ID');
            $table->integer('TA_REG_NO');
            $table->string('REGISTRATION_NO');
            $table->string('INSTNAME');
            $table->integer('INST_TYPE_FLAG')->comment('1 - Proprietorship , 2 - Partnership, 3 - Privet Ltd, 4 - Public Ltd, 5 - Other');
            $table->string('TRADE_LICENSE');
            $table->text('ADDRESS');
            $table->string('TIN_NO')->nullable();
            $table->string('BO_ID')->nullable();
            $table->string('POST_CODE');
            $table->string('TEL');
            $table->string('EMAIL');
            $table->string('FAX');
            $table->string('ACCOUNT_NAME');
            $table->string('ACCOUNT_NO');
            $table->string('BANK_NAME');
            $table->string('ROUTING_NO');
            $table->string('BRANCH');
            $table->string('DIVIDENT_OPT');
            $table->string('PASSWORD');
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
        Schema::dropIfExists('INST_APP');
    }
}
