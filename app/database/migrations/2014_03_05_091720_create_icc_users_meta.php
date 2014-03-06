<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIccUsersMeta extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('icc_users_meta', function(Blueprint $table) {
            $table->increments('id');
            $table->Integer('user_id');
            $table->String('meta_key', 50);
            $table->String('meta_value', 255);
            //$table->foreign('user_id')->references('id')->on('icc_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('icc_users_meta');
    }

}
