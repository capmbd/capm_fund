<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrusteeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('TRUSTEE', function (Blueprint $table) {
            $table->bigIncrements('TRUSTEE_ID');
            $table->string('TRUSTEE_COMPANY_NAME');
            $table->string('TRUSTEE_CONTACT_PERSON');
            $table->string('TRUSTEE_CONTACT_PERSON_MOBILE');
            $table->text('TRUSTEE_CONTACT_ADDRESS');
            $table->string('TRUSTEE_CONTACT_PHONE');
            $table->string('TRUSTEE_CONTACT_MOBILE');
            $table->string('TRUSTEE_EMAIL');
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
        Schema::dropIfExists('TRUSTEE');
    }
}
