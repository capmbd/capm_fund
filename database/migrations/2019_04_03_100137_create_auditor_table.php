<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AUDITOR', function (Blueprint $table) {
            $table->bigIncrements('AUDITOR_ID');
            $table->integer('SPONSOR_ID');
            $table->string('COMPANY_NAME');
            $table->string('CONTACT_PERSON');
            $table->string('CONTACT_PERSON_MOBILE');
            $table->text('CONTACT_ADDRESS');
            $table->string('CONTACT_PHONE');
            $table->string('CONTACT_MOBILE');
            $table->string('EMAIL');
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
        Schema::dropIfExists('AUDITOR');
    }
}
