<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\myOrder;

class OrderController extends Controller
{
    public function add(){
        $r = request();
        $addOrder = myOrder::Create([
            'amount' => $r -> subscribeCost,
            'userID' => $r -> Auth::id(),
            'orderID' => '',
        ]);
    }
}
