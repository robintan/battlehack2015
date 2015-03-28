<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Model\Item;

class ItemController extends Controller {

	public void create(Request $request) {
		$item = new Item();
		$item->fill($request->except('_token'));
		$item->save();
	}

}
