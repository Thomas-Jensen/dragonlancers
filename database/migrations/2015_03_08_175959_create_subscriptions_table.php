<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubscriptionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subscriptions', function(Blueprint $table)
		{
			$table->increments('id');
            $table->integer('client_id')->unsigned();
            $table->string('domain');
            $table->text('services');
            $table->string('fee');
            $table->integer('renews');
            $table->string('status');
            $table->string('screen_shot');
            $table->integer('maintenance');
            $table->integer('work');
            $table->integer('seo');
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
		Schema::drop('subscriptions');
	}

}
