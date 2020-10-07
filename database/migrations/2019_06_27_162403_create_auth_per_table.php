<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuthPerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('AUTH_PER', function (Blueprint $table) {
            $table->bigIncrements('AUTH_PER_ID');
            $table->string('INSTAPP_ID');
            $table->string('AUTH_GENDER');
            $table->string('AUTH_NAME');
            $table->string('AUTH_DESIG');
            $table->text('AUTH_ADDRESS');
            $table->string('AUTH_NATIONAL_ID');
            $table->date('AUTH_BIRTHDAY');
            $table->string('AUTH_MOBILE_NO');
            $table->string('AUTH_SIGNATURE')->nullable();
            $table->string('AUTH_IMG_PATH')->nullable();
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
        Schema::dropIfExists('AUTH_PER');
    }
}
