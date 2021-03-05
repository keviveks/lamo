<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('user_id')->unsigned();
            $table->string('user_title', 255);
            $table->string('first_name', 255);
            $table->string('last_name', 255);
            $table->string('user_name', 255)->unique();
            $table->string('user_email', 255)->unique();
            $table->string('user_password', 100);
            $table->string('address1', 255);
            $table->string('address2', 255)->nullable();
            $table->string('city', 255);
            $table->string('state', 255);
            $table->string('country', 255);
            $table->string('zip_code', 255);
            $table->string('mobile_number', 15)->unique();
            $table->string('office_phone', 25);
            $table->string('time_zone', 255);
            $table->string('profile_path', 255);
            $table->string('verified_number', 50);
            $table->integer('created_by');
            $table->dateTime('created_on');
            $table->boolean('user_status',1);
            //$table->rememberToken();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
