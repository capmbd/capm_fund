<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SPON', function (Blueprint $table) {
            $table->bigIncrements('SPON_ID');
            $table->string('COMPANY_NAME');
            $table->string('SPON_CONTACT_PERSON');
            $table->string('SPON_CONTACT_PERSON_MOBILE');
            $table->text('SPON_CONTACT_ADDRESS');
            $table->string('SPON_CONTACT_PHONE');
            $table->string('SPON_CONTACT_MOBILE');
            $table->string('SPON_EMAIL');
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
        Schema::dropIfExists('SPON');
    }
}
