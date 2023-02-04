<?php

namespace App\Http\Controllers;

use App\Events\PaymentSuccessful;
use App\Models\Booking;
use Exception;
use Illuminate\Http\Request;

class MidtransController extends Controller
{
    public function callback(Request $request)
    {
        $serverKey = config('midtrans.server_key');
        //SHA512(order_id+status_code+gross_amount+ServerKey)
        $hashed = hash('SHA512', $request->order_id . $request->status_code . $request->gross_amount . $serverKey);
        $booking = Booking::where('number', $request->order_id)->first();
        if ($hashed == $request->signature_key) {
            if ($request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
                $booking->status = 'confirmed';
                $booking->save();

                PaymentSuccessful::dispatch($booking);
            }
        } else {
            throw new Exception('Invalid signature key');
        }
    }
}
