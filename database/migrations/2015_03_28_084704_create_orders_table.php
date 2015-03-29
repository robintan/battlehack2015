<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('orders', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('queue_id')->unsigned()->index();
			$table->foreign('queue_id')->references('id')->on('queues');
			$table->string('transaction_id')->default('NOT PAID');
			$table->float('total_paid')->default(0);
			$table->string('currency_type')->default('SGD');
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
		Schema::drop('orders');
	}

}
