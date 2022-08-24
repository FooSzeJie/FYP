<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\User;
use Session;

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

    public function editProfile($id){
        $users=User::all()->where('id',$id);
        Return view('editProfile')
        ->with('users',$users);
        
    } 

    public function updateProfile(){
        $r=request();
        $users=User::find($r->userID);
        
        if($r->file('ProfileImage')!=''){
            $image=$r->file('ProfileImage');        
            $image->move('profileImage',$image->getClientOriginalName());                   
            $imageName=$image->getClientOriginalName(); 
            $users->profileImage=$imageName;
            }    
        
        $users->name=$r->userName;
        //$users->email=$r->useremail;
        //$users->password=$r->courseTime;
        $users->age=$r->userAge;
        $users->address=$r->userAddress;
        $users->save();

        Session::flash('success','Profile Was update Successfully');
        return view('welcome');
    }
}
