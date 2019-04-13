<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersCategoryTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'volunteers_category';

    /**
     * Run the migrations.
     * @table volunteers_category
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('volunteers_id');
            $table->integer('category_id');
            $table->increments('id');

            $table->index(["volunteers_id"], 'fk_volunteers_has_category_volunteers1_idx');

            $table->index(["category_id"], 'fk_volunteers_has_category_category1_idx');


            $table->foreign('volunteers_id', 'fk_volunteers_has_category_volunteers1_idx')
                ->references('id')->on('volunteers')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('category_id', 'fk_volunteers_has_category_category1_idx')
                ->references('id')->on('category')
                ->onDelete('no action')
                ->onUpdate('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
