<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title_en', 50)->unique();
            $table->string('title_da', 50)->unique();
            $table->string('slug_en');
            $table->string('slug_da');
            $table->string('category');
            $table->string('author');
            $table->string('slug_author');
            $table->text('body_en');
            $table->text('body_da');
			$table->timestamps();
            $table->timestamp('published_at');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}
