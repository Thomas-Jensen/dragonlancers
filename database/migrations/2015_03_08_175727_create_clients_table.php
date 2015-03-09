<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clients', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->string('name');
            $table->string('phone');
            $table->string('email');
            $table->string('reg_number');
            $table->text('address');
            $table->string('zip_code');
            $table->string('city');
            $table->string('country');
            $table->string('language');
            $table->string('currency');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('clients');
	}

}
