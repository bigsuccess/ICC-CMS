<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIccPostsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('icc_posts', function(Blueprint $table) {
            $table->increments('id');
            $table->String('title', 156);
            $table->String('slug', 156);
            $table->String('description', 500);
            $table->Text('content', 35);
            $table->String('thumbnail', 100);
            $table->String('url', 255);
            $table->string('meta_title', 70);
            $table->string('meta_keywords', 255);
            $table->string('meta_description', 156);
            $table->string('meta_image', 255);
            $table->Integer('cate_id');
            $table->String('lang_code', 5);
            $table->Integer('user_id');
            $table->datetime('post_date');
            $table->Boolean('status');
//            $table->foreign('cate_id')->references('id')->on('icc_categories');
//            $table->foreign('user_id')->references('id')->on('icc_users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('icc_posts');
    }

}
