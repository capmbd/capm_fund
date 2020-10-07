<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetManagerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ASSET_MANAGER', function (Blueprint $table) {
            $table->bigIncrements('MANAGER_ID');
            $table->string('MANAGER_COMPANY_NAME');
            $table->string('MANAGER_CONTACT_PERSON');
            $table->string('MANAGER_CONTACT_PERSON_MOBILE');
            $table->text('MANAGER_CONTACT_ADDRESS');
            $table->string('MANAGER_CONTACT_PHONE');
            $table->string('MANAGER_CONTACT_MOBILE');
            $table->string('MANAGER_EMAIL');
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
        Schema::dropIfExists('ASSET_MANAGER');
    }
}
