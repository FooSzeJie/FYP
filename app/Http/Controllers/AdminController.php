<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\User;

class AdminController extends Controller
{   
    public function __construct()
    {
    $this->middleware('auth');    
    }

    //view role adjust page
    public function view(){
        if (Auth::check() && Auth::user()->email === "abc@gmail.com") {
            $users = User::all();
            return view('viewUser')->with('users',$users);
            
        }
        else{
            return view('welcome');
        }
    }

    public function edit($id){
        $users = User::all()->where('id',$id);
        return view('editRole')->with('users',$users);
    }

    public function update(){
        $r=request();
        $users=User::find($r->userID);
        $users->role=$r->role;
        $users->save();

        return redirect()->route('viewUser');
    }
}
