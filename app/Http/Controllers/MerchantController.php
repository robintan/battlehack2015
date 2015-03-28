<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\User;
use App\Model\Queue;

use Braintree_ClientToken;

class MerchantController extends Controller {

	public function showAll() {

		$merchants = User::all();

		foreach ($merchants as $merchant) {
			$merchant['queueing'] = Queue::where('merchant_id', '=', $merchant->id)->count();
		}

		return response()->json(['merchants' => $merchants]);
	}

	public function show($id) {

		$merchant = User::find($id);

		return response()->json(['merchant' => $merchant]);
	}

	public function update(Request $request, $id) {

		$merchant = User::find($id);
		if ($merchant == null) {
			return response()->json([
				'success' => false,
				'message' => 'Merchant not found!'
			]);
		}
		
		$merchant->fill($request->except(['_token']));
		$merchant->save();

		return response()->json(['success' => true]);
	}

}
