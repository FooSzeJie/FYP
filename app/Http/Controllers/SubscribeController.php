<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Subscribe;

class SubscribeController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');    
    } 

    public function add(){
        $r=request();
        $subscribes = Subscribe::create([
            'name' => $r->subscribeName,
            'date' => $r->subscribeDate,
            'cost' => $r->subscribeCost,
            'description' => $r->subscribeDescription,
        ]);

        return view('showSubscribe')->with('subscribes',$subscribes);
    }

    public function show(){
        $subscribes = Subscribe::all();
        return view('showSubscribe')->with('subscribes',$subscribes);
    }
}
