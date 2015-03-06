<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSocialmediaTablesToAuthorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('authors', function(Blueprint $table)
		{
			$table->string('facebook')->unique();
            $table->string('googleplus')->unique();
            $table->string('twitter')->unique();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('authors', function(Blueprint $table)
		{
			$table->dropColumn('facebook');
            $table->dropColumn('googleplus');
            $table->dropColumn('twitter');
		});
	}

}
