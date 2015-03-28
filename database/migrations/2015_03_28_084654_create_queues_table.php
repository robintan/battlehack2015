<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQueuesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('queues', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('merchant_id')->index();
			$table->foreign('merchant_id')->references('id')->on('users');
			$table->string('phone_number');
			$table->string('email');
			$table->integer('number_of_persons')->unsigned();
			$table->enum('status', ['QUEUEING', 'INQUEUE', 'OUTQUEUE'])->default('QUEUEING');
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
		Schema::drop('queues');
	}

}
