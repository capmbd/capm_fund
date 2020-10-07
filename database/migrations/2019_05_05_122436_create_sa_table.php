<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SALESAGENT', function (Blueprint $table) {
            $table->bigIncrements('SALESAGENT_ID');
            $table->string('SALESAGENT');
            $table->integer('SA_TYPE')->comment('1 - Individual , 2 - Corporate');
            $table->integer('SALESAGENT_CODE');
            $table->text('ADDRESS');
            $table->string('CONTACT_PERSON');
            $table->string('CP_DESIG')->nullable();
            $table->string('TEL')->nullable();
            $table->string('MOBILE');
            $table->string('FAX')->nullable();
            $table->string('email');
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
        Schema::dropIfExists('SALESAGENT');
    }
}
