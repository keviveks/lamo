<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePermissionRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permission_roles', function (Blueprint $table) {
            $table->bigIncrements('permission_role_id')->unsigned();
            $table->bigInteger('role_id')->unsigned();
            $table->foreign('role_id')->references('role_id')->on('roles');
            $table->boolean('grant',1);
            $table->integer('created_by');
            $table->dateTime('created_on');
            $table->boolean('user_status',1);
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
        Schema::dropIfExists('permission_roles');
    }
}
