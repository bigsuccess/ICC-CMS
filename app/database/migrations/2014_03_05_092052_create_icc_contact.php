<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIccContact extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('icc_contact', function(Blueprint $table) {
            $table->increments('id');
            $table->String('name', 50);
            $table->String('slug', 200);
            $table->String('title', 200);
            $table->String('email', 500);
            $table->Text('message');
            $table->Integer('status');
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
