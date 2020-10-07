<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJointAplTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('JOINT_APPLICANT', function (Blueprint $table) {
            $table->bigIncrements('JOINT_APPLICANT_ID');
            $table->string('REGISTRATION_NO');
            $table->string('JOINT_NAME');
            $table->string('JOINT_FATHER_NAME');
            $table->string('JOINT_MOTHER_NAME');
            $table->text('JOINT_PRESENT_ADDRESS');
            $table->text('JOINT_PERMANENT_ADDRESS');
            $table->string('JOINT_NATIONAL_ID');
            $table->date('JOINT_BIRTHDAY');
            $table->string('JOINT_TELEPHONE');
            $table->string('JOINT_NATIONALITY');
            $table->string('JOINT_OCCUPATION');
            $table->string('JOINT_IMAGE')->nullable();
            $table->string('JOINT_APP_SIGN')->nullable();
            $table->string('JOINT_NID_IMG')->nullable();
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
        Schema::dropIfExists('JOINT_APPLICANT');
    }
}
