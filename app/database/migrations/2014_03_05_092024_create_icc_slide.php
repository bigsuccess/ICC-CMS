<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIccSlide extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('icc_slides', function(Blueprint $table) {
            $table->increments('id');
            $table->String('title', 200);
            $table->String('slug', 200);
            $table->String('summary', 500);
            $table->String('link', 150);
            $table->String('lang_code', 5);
            $table->Integer('user_id');
            $table->Text('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //
    }

}
