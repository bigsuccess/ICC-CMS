<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIccCustomerComment extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('icc_customer_comment', function(Blueprint $table) {
            $table->increments('id');
            $table->String('name', 50);
            $table->Text('comment');
            $table->smallInteger('type');
            $table->Boolean('status');
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
