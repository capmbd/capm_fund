<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvtTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('INVESTOR_TYPE', function (Blueprint $table) {
            $table->bigIncrements('INVESTOR_TYPE_ID');
            $table->string('INVESTOR_TYPE');
            $table->integer('FLAG')->comment('1 - indv & 2 - inst');
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
        Schema::dropIfExists('INVESTOR_TYPE');
    }
}
