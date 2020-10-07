<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestmentTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('INVESTMENT_TYPE', function (Blueprint $table) {
            $table->bigIncrements('INVESTMENT_TYPE_ID');
            $table->string('INVESTMENT_TYPE');
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
        Schema::dropIfExists('INVESTMENT_TYPE');
    }
}
