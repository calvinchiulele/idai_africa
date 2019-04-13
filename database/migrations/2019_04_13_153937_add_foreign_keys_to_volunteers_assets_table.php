<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVolunteersAssetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('volunteers_assets', function(Blueprint $table)
		{
			$table->foreign('assets_id', 'fk_assets_has_volunteers_assets1')->references('id')->on('assets')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('volunteers_id', 'fk_assets_has_volunteers_volunteers1')->references('id')->on('volunteers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('volunteers_assets', function(Blueprint $table)
		{
			$table->dropForeign('fk_assets_has_volunteers_assets1');
			$table->dropForeign('fk_assets_has_volunteers_volunteers1');
		});
	}

}
