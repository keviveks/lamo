<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->bigIncrements('user_profile_id')->unsigned();
            $table->enum('user_gender', ['M','F', 'T']);
            $table->date('user_dob',);
            $table->string('user_ssn',255);
            $table->string('user_drivers_licence',255);
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('user_id')->on('users');
            $table->integer('created_by');
            $table->dateTime('created_on');
            $table->boolean('user_status',1);
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_profiles');
    }
}
