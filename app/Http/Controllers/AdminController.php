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
            $users = DB::table('users')
            //-get();
            ->paginate(5);

            return view('viewUser')->with('users',$users);
            
        }
        else{
            return view('welcome');
        }
    }

    public function editAdmin($id) {
        $hrdf = User::find($id);
        
        $hrdf->role = 'admin';
        $hrdf->save();

        Return redirect()->route('viewUser');
    }

    public function editTeacher($id) {
        $hrdf = User::find($id);
        
        $hrdf->role = 'teacher';
        $hrdf->save();

        Return redirect()->route('viewUser');
    }

    public function editUser($id) {
        $hrdf = User::find($id);
        
        $hrdf->role = 'user';
        $hrdf->save();

        Return redirect()->route('viewUser');
    }
}
