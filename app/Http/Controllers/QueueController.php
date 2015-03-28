<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Model\Queue;
use App\Model\Order;
use App\Model\Item;
use App\Model\Reference\OrderList;

use DB;
use Log;

use App\Services\PaymentService;

class QueueController extends Controller {

	public function show($id) {

		$queue = Queue::find($id);

		return response()->json(['queue' => $queue]);
	}

	public function showMerchantQueue(Request $request) {

		$id = $request->get('merchant_id');

		$queues = Queue::where('merchant_id', '=' , $id);

		return response()->json(['queues' => $queues]);
	}

	public function create(Request $request) {

		$payment_nonce = $request->input('payment_method_nonce');

		$detail = json_decode($request->input('detail'), true);
		$items = json_decode($request->input('items'), true);
		
	DB::beginTransaction();
		$queue = new Queue();
		$queue->fill($detail);
		$queue->save();

		Log::info('Added Queue ID : ' . $queue->id);

		$order = new Order();
		$order->queue_id = $queue->id;
		$order->save();

		Log::info('Added Order ID : ' . $order->id);

		$total_price = $this->processOrderList($items, $order->id);

		Log::info('Total price : ' . $total_price);

		PaymentService::makePayment($payment_nonce, $total_price);

		$order->transaction_id = "PAID";
		$order->total_paid = $total_price;
		$order->save();
	DB::commit();

		return response()->json([
			'order' => $order
		]);
	}

	public function update(Request $request, $id) {
		$queue = Queue::find($id);
		if ($queue == null) {
			return response()->json([
				'success' => false,
				'message' => 'Queue not found!'
			]);
		}

		$queue->fill($request->except('_token'));
		$queue->save();

		return response()->json(['success' => true]);
	}

	private function processOrderList($items, $order_id) {
		$total_price = 0;

		foreach ($items as $item) {
			// Use database price to avoid data injection
			$price = Item::find($item['item_id'])->price;
			$quantity = $item['quantity'];

			$total_price = $total_price + ($price * $quantity);

			$order_list = new OrderList();
			$order_list->order_id = $order_id;
			$order_list->fill($item);
			$order_list->save();
		}

		return $total_price;
	}
}
