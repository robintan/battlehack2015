<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Braintree;
use Braintree_ClientToken;
use Braintree_Configuration;
use Braintree_Transaction;

Braintree_Configuration::environment('sandbox');
Braintree_Configuration::merchantId('k677d9cvg9zt49p6');
Braintree_Configuration::publicKey('7x4y8y8b3q6s6tgx');
Braintree_Configuration::privateKey('11f0631346e7eb17d5e0f13c66ddfc1a');
       
class PaymentController extends Controller {


    public function payments() {
        $nonce = $_POST['payment_method_nonce'];
        $amount = $_POST['amount'];

        $result = Braintree_Transaction::sale(array(
                        'amount' => $amount,
                        'paymentMethodNonce' => $nonce,
                        'options' => array(
                            'submitForSettlement' => true
                        )
                    ));

        if ($result->success) {
            $success = true;
            $transactionId = $result->transaction->id;

            return response()->json([
                'success' => true,
                'transaciontId' => $transactionId
            ]);

       } else if ($result->errors->deepSize() > 0) {
            print_r($result->errors);
            return response()->json([
                'success' => false,
                'error' => $result->errors
            ]);
        } 
    }

}
