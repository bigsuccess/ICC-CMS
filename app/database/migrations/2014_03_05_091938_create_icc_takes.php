<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIccTakes extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('icc_takes', function(Blueprint $table) {
            $table->increments('id');
            $table->String('name', 32);
            $table->String('logo', 60);
            $table->String('description', 500);
            $table->Text('content');
            $table->String('lang_code', 5);
            $table->datetime('page_date');
            $table->Boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('icc_takes');
    }

}
