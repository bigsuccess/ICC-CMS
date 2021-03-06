<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIccUsersTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('icc_users', function(Blueprint $table) {
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
            $table->Integer('role_id');
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
        Schema::drop('icc_users');
    }

}
