<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIccProducts extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('icc_products', function(Blueprint $table) {
            $table->increments('id');
            $table->String('name', 156);
            $table->String('slug', 156);
            $table->String('description', 500);
            $table->Text('content');
            $table->smallInteger('type');
            $table->string('meta_title', 70);
            $table->string('meta_keywords', 255);
            $table->string('meta_description', 156);
            $table->string('meta_image', 255);
            $table->String('lang_code', 5);
            $table->Integer('user_id');
            $table->datetime('product_date');
            $table->Boolean('status');
            //$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('icc_products');
    }

}
