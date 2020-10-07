<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrncAplTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PRINCIPAL_APPLICANT', function (Blueprint $table) {
            $table->bigIncrements('PRINCIPAL_APPLICANT_ID');
            $table->string('REGISTRATION_NO');
            $table->integer('TA_REG_NO');
            $table->string('GENDER');
            $table->string('NAME');
            $table->string('FATHER_NAME');
            $table->string('MOTHER_NAME');
            $table->text('PRESENT_ADDRESS');
            $table->text('PERMANENT_ADDRESS');
            $table->string('NATIONAL_ID');
            $table->string('CITY');
            $table->string('DISTRICT');
            $table->string('COUNTRY');
            $table->date('BIRTHDAY');
            $table->string('TELEPHONE');
            $table->string('EMAIL');
            $table->string('NATIONALITY');
            $table->string('BOID')->nullable();
            $table->string('POST_CODE');
            $table->string('OCCUPATION');
            $table->string('ETIN')->nullable();
            $table->string('ACCOUNT_NAME');
            $table->string('ACCOUNT_NO');
            $table->string('BANK_NAME');
            $table->string('ROUTING_NO');
            $table->string('BRANCH');
            $table->string('DIVIDENT_OPT');
            $table->string('IMAGE')->nullable();
            $table->string('APP_SIGN')->nullable();
            $table->string('NID_IMG')->nullable();
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
        Schema::dropIfExists('PRINCIPAL_APPLICANT');
    }
}
