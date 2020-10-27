<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstrumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instrument', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('inst_name');
            $table->string('inst_cat');
            $table->string('short_name');
            $table->string('ISIN');
			$table->float('market_price', 10, 2);
			$table->string('inst_type');
			$table->float('pe_ratio', 10, 2);
			$table->string('total_share');
			$table->string('dec_date');
			$table->float('face_value', 10, 2);
			$table->float('cost_per_share', 10, 2);
			$table->float('premium', 10, 2);
			$table->string('marginable_status');
			$table->float('latest_eps', 10, 2);
			$table->float('public_share', 10, 2);
			$table->string('sector_cate');
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
        Schema::dropIfExists('instrument');
    }
}
