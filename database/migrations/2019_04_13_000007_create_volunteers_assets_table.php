<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersAssetsTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'volunteers_assets';

    /**
     * Run the migrations.
     * @table volunteers_assets
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('assets_id');
            $table->integer('volunteers_id');
            $table->increments('id');

            $table->index(["volunteers_id"], 'fk_assets_has_volunteers_volunteers1_idx');

            $table->index(["assets_id"], 'fk_assets_has_volunteers_assets1_idx');


            $table->foreign('assets_id', 'fk_assets_has_volunteers_assets1_idx')
                ->references('id')->on('assets')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('volunteers_id', 'fk_assets_has_volunteers_volunteers1_idx')
                ->references('id')->on('volunteers')
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
