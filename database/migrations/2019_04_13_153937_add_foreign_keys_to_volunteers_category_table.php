<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVolunteersCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('volunteers_category', function(Blueprint $table)
		{
			$table->foreign('category_id', 'fk_volunteers_has_category_category1')->references('id')->on('category')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('volunteers_id', 'fk_volunteers_has_category_volunteers1')->references('id')->on('volunteers')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('volunteers_category', function(Blueprint $table)
		{
			$table->dropForeign('fk_volunteers_has_category_category1');
			$table->dropForeign('fk_volunteers_has_category_volunteers1');
		});
	}

}
