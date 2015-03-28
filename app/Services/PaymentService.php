<?php namespace App\Services;

use Braintree;
use Braintree_ClientToken;
use Braintree_Configuration;
use Braintree_Transaction;

use Log;

class PaymentService {

	private static $initialized = false;

	private static function initialize()
    {
    	if (self::$initialized)
    		return;

    	self::$initialized = true;
    }

	public static function makePayment($payment_nonce, $amount) {

		Log::info('Processing payment [' . $payment_nonce . '] $ ' . $amount);

		$result = Braintree_Transaction::sale(array(
			'amount' => $amount,
			'paymentMethodNonce' => $payment_nonce,
			'options' => array(
				'submitForSettlement' => true
			)
		));

		if ($result->success) {
			return true;
		} else {
			Log::error($result->errors);
			return false;
		}

	}

}