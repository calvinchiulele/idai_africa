<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVolunteersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('volunteers', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('phonenumber', 9)->nullable();
			$table->boolean('status')->nullable();
			$table->integer('districts_id')->index('fk_volunteers_districts1_idx');
			$table->integer('users_id')->index('fk_volunteers_users1_idx');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('volunteers');
	}

}
