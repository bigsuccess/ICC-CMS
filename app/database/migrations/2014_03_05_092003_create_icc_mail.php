<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIccMail extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('icc_mails', function(Blueprint $table) {
            $table->increments('id');
            $table->String('name', 50);
            $table->String('slug', 200);
            $table->String('title', 200);
            $table->String('subject', 200);
            $table->String('description', 200);
            $table->Text('body');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('icc_mails');
    }

}
