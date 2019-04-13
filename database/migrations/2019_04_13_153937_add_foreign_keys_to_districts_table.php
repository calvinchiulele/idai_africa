<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDistrictsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('districts', function(Blueprint $table)
		{
			$table->foreign('provinces_id', 'fk_districts_provinces')->references('id')->on('provinces')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('districts', function(Blueprint $table)
		{
			$table->dropForeign('fk_districts_provinces');
		});
	}

}
