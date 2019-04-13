<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVolunteersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'volunteers';

    /**
     * Run the migrations.
     * @table volunteers
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('phonenumber', 9)->nullable();
            $table->tinyInteger('status')->nullable();
            $table->integer('districts_id');
            $table->integer('users_id');

            $table->index(["users_id"], 'fk_volunteers_users1_idx');

            $table->index(["districts_id"], 'fk_volunteers_districts1_idx');


            $table->foreign('districts_id', 'fk_volunteers_districts1_idx')
                ->references('id')->on('districts')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('users_id', 'fk_volunteers_users1_idx')
                ->references('id')->on('users')
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
