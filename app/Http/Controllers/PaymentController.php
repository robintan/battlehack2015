<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Braintree;
use Braintree_ClientToken;
use Braintree_Configuration;
use Braintree_Transaction;
       
class PaymentController extends Controller {

    public function get_nonce() {
        $nonce = $_POST['payment_method_nonce'];
        return response()->json(compact('nonce'));
    }

}
