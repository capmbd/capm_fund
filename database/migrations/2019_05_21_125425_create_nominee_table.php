<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNomineeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NOMINEE_INFO', function (Blueprint $table) {
            $table->bigIncrements('NOMINEE_INFO_ID');
            $table->string('REGISTRATION_NO');
            $table->string('NOM_NAME');
            $table->string('NOM_FATHER_NAME');
            $table->string('NOM_MOTHER_NAME');
            $table->string('RELATION_APPLICANT');
            $table->text('NOM_PRESENT_ADDRESS');
            $table->text('NOM_PERMANENT_ADDRESS');
            $table->string('NOM_NATIONAL_ID');
            $table->date('NOM_BIRTHDAY');
            $table->string('NOM_TELEPHONE');
            $table->string('NOM_COUNTRY');
            $table->string('NOM_OCCUPATION');
            $table->string('NOM_IMAGE')->nullable();
            $table->string('NOM_APP_SIGN')->nullable();
            $table->string('NOM_NID_IMG')->nullable();
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
        Schema::dropIfExists('NOMINEE_INFO');
    }
}
