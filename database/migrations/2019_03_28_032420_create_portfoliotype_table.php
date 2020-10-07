<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfoliotypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PORTFOLIO_TYPE', function (Blueprint $table) {
            $table->bigIncrements('PORTFOLIO_TYPE_ID');
            $table->string('PORTFOLIO_TYPE');
            $table->integer('OPEN_CLOSE_FLAG')->comment('1 - open & 0 - close');
            $table->integer('INCOMEREST_FLAG')->comment('1 - interest, 2 - dividend & 0 - none ');
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
        Schema::dropIfExists('PORTFOLIO_TYPE');
    }
}
