<?php namespace App\Http\Controllers;


use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Log;
class NotificationController extends Controller {

    public function sendSMS() {
        $phone = $_POST['phone'];
        $msg = urlencode($_POST['msg']);

        $result = file_get_contents('https://secure.hoiio.com/open/sms/send?dest=' . $phone . '&msg=' . $msg . '&access_token=Yj2xu7zJWzJPfmDf&app_id=Nr7m3zB6PAr1v2z7');

        if (strpos($result,'success_ok') !== false) {
            $success = true;

            return response()->json([
                'success' => true,
            ]);

       } else {
            return response()->json([
                'success' => false,
                'error' => "Unable to send SMS"
            ]);
        } 


    }
}
