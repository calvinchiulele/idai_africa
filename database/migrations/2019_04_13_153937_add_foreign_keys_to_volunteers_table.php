<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVolunteersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('volunteers', function(Blueprint $table)
		{
			$table->foreign('districts_id', 'fk_volunteers_districts1')->references('id')->on('districts')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('users_id', 'fk_volunteers_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('volunteers', function(Blueprint $table)
		{
			$table->dropForeign('fk_volunteers_districts1');
			$table->dropForeign('fk_volunteers_users1');
		});
	}

}
