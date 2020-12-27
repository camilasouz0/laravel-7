<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGroupsTable extends Migration
{
    public function up()
    {
        Schema::create('user_groups', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->string('permission')->default('default');

            $table->timestampsTz();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
			$table->foreign('group_id')->references('id')->on('groups');
        });
    }

    public function down()
    {
        Schema::dropIfExists('user_groups');
    }
}
