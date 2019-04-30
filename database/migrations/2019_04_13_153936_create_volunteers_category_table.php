<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVolunteersCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('volunteers_category', function(Blueprint $table)
		{
			$table->integer('volunteers_id')->index('fk_volunteers_has_category_volunteers1_idx');
			$table->integer('category_id')->index('fk_volunteers_has_category_category1_idx');
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
		Schema::drop('volunteers_category');
	}

}
