<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;

/** All Paypal Details class **/
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Transaction;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;
use Redirect;
use Session;
use URL;
use Auth;

//use Notification;


class PaymentController extends Controller
{
    private $_api_context;
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function view(){
        if(Auth::check() && Auth::user()->paymentStatus != "null"){
            return view('paymentPage');
        }
        else{
            return view('welcome');
        }
    }

    public function paymentPost(Request $request)
    {
	       
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            Stripe\Charge::create ([
                "amount" => $request->cost*100,
                "currency" => "MYR",
                "source" => $request->stripeToken,
                "description" => "This payment is testing purpose of southern online",
            ]);

            $newOrder = myOrder::Create([   //create new order in myOrder with the log in userID
                'amount' => $request->cost,
                'userID' => Auth::id(),
            ]);

            $orderID = DB::table('my_orders')->where('userID', '=', Auth::id())->orderBy('created_at', 'desc')->first();  //get the order ID just now created

            
        return view('welcome');
    }

    public function passCost(Request $request){
        
        return view('paymentPage')->with('cost',$cost);
    }
}