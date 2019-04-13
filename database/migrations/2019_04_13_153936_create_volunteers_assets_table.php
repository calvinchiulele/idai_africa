<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVolunteersAssetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('volunteers_assets', function(Blueprint $table)
		{
			$table->integer('assets_id')->index('fk_assets_has_volunteers_assets1_idx');
			$table->integer('volunteers_id')->index('fk_assets_has_volunteers_volunteers1_idx');
			$table->integer('id', true);
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
		Schema::drop('volunteers_assets');
	}

}
