<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->string('name');
            $table->timestamp('start');
            $table->timestamp('start_done');
            $table->timestamp('planning_start');
            $table->timestamp('planning_end');
            $table->timestamp('planning_done');
            $table->timestamp('design_start');
            $table->timestamp('design_end');
            $table->timestamp('design_done');
            $table->timestamp('development_start');
            $table->timestamp('development_end');
            $table->timestamp('development_done');
            $table->timestamp('finalizing_start');
            $table->timestamp('finalizing_end');
            $table->timestamp('finalizing_done');
            $table->timestamp('launch_start');
            $table->timestamp('launch_end');
            $table->timestamp('launch_done');
            $table->timestamp('finish');
            $table->timestamp('finish_done');
            $table->string('status');
            $table->integer('fee');
			$table->timestamps();

            $table->foreign('client_id')
                ->references('id')
                ->on('clients')
                ->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
