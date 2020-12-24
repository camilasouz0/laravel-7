<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupsTable extends Migration
{
	public function up()
	{
		Schema::create('groups', function(Blueprint $table) {
            $table->increments('id');
			$table->string('name');
			$table->integer('user_id')->unsigned();
    		$table->integer('instituition_id')->unsigned();

            $table->timestamps();
			$table->softDeletes();
			
			// Foreign Keys
			$table->foreign('user_id')->references('id')->on('users');
			$table->foreign('instituition_id')->references('id')->on('instituitions');
			
		});
	}

	public function down()
	{
		Schema::drop('groups');
	}
}
