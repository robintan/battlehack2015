<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Model\Item;
use DB;
class ItemController extends Controller {

	public function create(Request $request) {
		$item = new Item();
		$item->fill($request->except('_token'));
		$item->save();

		return response()->json(['success' => true]);
	}

	public function delete($id) {
		Item::destroy($id);

		return response()->json(['success' => true]);
	}

	public function show($id) {
		$item = Item::find($id);

		return response()->json(['item' => $item]);
	}

	public function showMerchantItems(Request $request) {
		$merchant_id = $request->input('merchant_id');

		// TODO CHANGE TO Item::where('merchant_id', '=', $merchant_id); somehow it was not working
		$items = DB::table('items')->where('merchant_id', '=', $merchant_id)->get();

		return response()->json(['items' => $items]);
	}

}
