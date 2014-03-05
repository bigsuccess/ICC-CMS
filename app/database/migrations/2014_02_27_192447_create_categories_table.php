<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCategoriesTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('categories', function(Blueprint $table) {
            $table->increments('id');
            $table->string('name', 60);
            $table->string('slug', 60);
            $table->smallInteger('parent_id')->default(0);
            $table->smallInteger('orders')->default(0);
            $table->string('meta_title', 70);
            $table->string('meta_keywords', 255);
            $table->string('meta_description', 156);
            $table->string('meta_image', 255);
            $table->boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('categories');
    }

}
