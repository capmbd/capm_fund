<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustodianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CUSTODIAN', function (Blueprint $table) {
            $table->bigIncrements('CUSTODIAN_ID');
            $table->string('CUSTODIAN_COMPANY_NAME');
            $table->string('CUSTODIAN_CONTACT_PERSON');
            $table->string('CUST_CONTACT_PERSON_MOBILE');
            $table->text('CUSTODIAN_CONTACT_ADDRESS');
            $table->string('CUSTODIAN_CONTACT_PHONE');
            $table->string('CUSTODIAN_CONTACT_MOBILE');
            $table->string('CUSTODIAN_EMAIL');
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
        Schema::dropIfExists('CUSTODIAN');
    }
}
