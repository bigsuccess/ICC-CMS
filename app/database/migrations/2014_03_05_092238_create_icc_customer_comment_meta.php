<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIccCustomerCommentMeta extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('icc_customer_comment_meta', function(Blueprint $table) {
            $table->increments('id');
            $table->String('meta_value', 50);
            $table->String('meta_key',150);
            $table->smallInteger('customer_id');
            //$table->foreign('customer_id')->references('id')->on('icc_customer_comment');
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
