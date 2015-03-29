<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderListTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('order_list', function(Blueprint $table)
		{
			$table->integer('order_id')->unsigned()->index();
			$table->foreign('order_id')->references('id')->on('orders');
			$table->integer('item_id')->unsigned()->index();
			$table->foreign('item_id')->references('id')->on('items');
			$table->integer('quantity');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('order_list');
	}

}
