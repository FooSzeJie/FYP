<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\User;

class UserController extends Controller
{
    public function __construct()
    {
    $this->middleware('auth');    
    }

    public function view($id){
        $users=User::all()->where('id',$id);
        return view('profile')->with('users',$users);
    }
}
