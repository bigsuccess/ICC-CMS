<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('users', function(Blueprint $table) {
            $table->increments('id');
            $table->String('username', 32);
            $table->String('password', 60);
            $table->String('email', 50);
            $table->String('first_name', 35);
            $table->String('last_name', 10);
            $table->Boolean('gender');
            $table->date('birthday');
            $table->String('phone', 14);
            $table->String('address', 128);
            $table->String('token', 32);
            $table->Integer('group_id');
            $table->datetime('joined_date');
            $table->Boolean('status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('users');
    }

}
