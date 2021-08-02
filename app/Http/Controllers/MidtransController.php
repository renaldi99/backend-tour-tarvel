<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TransactionSuccess;
use App\Transaction;
use Illuminate\Support\Facades\Mail;
use Midtrans\Config;
use Midtrans\Notification;

class MidtransController extends Controller
{
    public function notificationHandler(Request $request)
    {
        Config::$serverKey = config('midtrans.serverKey');
        Config::$isProduction = config('midtrans.isProduction');
        Config::$isSanitized = config('midtrans.isSanitized');
        Config::$is3ds = config('midtrans.is3ds');

        // create instance midtrans notification
        $notification = new Notification();

        //pecah order id agar bisa diterima di database
        $order = explode('-', $notification->order_id);

        $status = $notification->transaction_status;
        $type = $notification->payment_type;
        $fraud = $notification->fraud_status;
        $order_id = $order[1];

        // search transaction order by ID
        $transaction = Transaction::findOrFail($order_id);

        if($status == 'capture'){
            if($type == 'credit_card'){
                if($fraud == 'challenge'){
                    $transaction->transaction_status = 'CHALLENGE';
                } else {
                    $transaction->transaction_status = 'SUCCESS';
                }
            }
        }
        elseif($status == 'settlement'){
            $transaction->transaction_status = 'SUCCESS';
        }
        elseif($status == 'pending'){
            $transaction->transaction_status = 'PENDING';
        }
        elseif($status == 'deny'){
            $transaction->transaction_status = 'FAILED';
        }
        elseif($status == 'expire'){
            $transaction->transaction_status = 'EXPIRED';
        }
        elseif($status == 'cancel'){
            $transaction->transaction_status = 'FAILED';
        }

        //simpan transaksi
        $transaction->save();

        // Send Notification
        if($transaction)
        {
            if($status == 'capture' && $fraud == 'accept')
            {
                Mail::to($transaction->user)->send(
                    new TransactionSuccess($transaction)
                );
            }
            elseif($status == 'settlement')
            {
                Mail::to($transaction->user)->send(
                    new TransactionSuccess($transaction)
                );
            }
            elseif($status == 'success')
            {
                Mail::to($transaction->user)->send(
                    new TransactionSuccess($transaction)
                );
            }
            elseif($status == 'capture' && $fraud == 'challenge')
            {
                return response()->json([
                    'meta' => [
                        'code' => 200,
                        'message' => 'Midtrans Payment Challenge'
                    ]
                ]);
            }
            else
            {
                return response()->json([
                    'meta' => [
                        'code' => 200,
                        'message' => 'Midtrans Payment Not Settlement'
                    ]
                ]);
            }

            return response()->json([
                'meta' => [
                    'code' => 200,
                    'message' => 'Midtrans Payment Success'
                ]
            ]);
        }

    }   

    public function finishRedirect(Request $request)
    {   
        return view('pages.success');
    }

    public function unfinishRedirect(Request $request)
    {   
        return view('pages.unfinish');
    }

    public function errorRedirect(Request $request)
    {   
        return view('pages.failed');
    }
}
