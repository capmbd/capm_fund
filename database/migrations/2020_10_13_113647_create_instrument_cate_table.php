<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstrumentCateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrument_cate', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('code');
            $table->string('description');
            $table->string('sttelment_day_dse');
            $table->string('sttelment_day_cse');
			$table->integer('status');
            $table->integer('insert_employee_id');
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
        Schema::dropIfExists('instrument_cate');
    }
}
