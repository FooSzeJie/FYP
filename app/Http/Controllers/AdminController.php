<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Cookie;
use App\Models\User;
use App\Models\Admin;

class AdminController extends Controller
{   

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
    
    //Login
    public function adminLogin(){
        return view('/adminLogin');
    }

    //Check Login
    public function check_adminLogin(Request $request){
        $request->validate([
            'adminName' => 'required',
            'password' => 'required',
        ]);
        $admin = Admin::where(['adminName'=>$request->adminName,'password'=>sha1($request->password)])
        ->count();
        if($admin>0){
            $adminData = Admin::where(['adminName'=>$request->adminName,'password'=>sha1($request->password)])
            ->get();
            session(['adminData'=>$adminData]);
            if($request->has('rememberme')){
                Cookie::queue('adminuser',$request->adminName,1440);
                Cookie::queue('adminpwd',$request->password,1440);
            }
            return redirect('adminBackEnd');
        }else{
            return redirect('admin/login')->with('msg','Invalid username/Password!!');
        }
    }

    //Logout
    public function adminLogout(){
        session()->forget(['adminData']);
        return redirect('admin/login');
    }   

    //Show Course
    public function showCourse(){
        $courses = DB::table('courses')
        ->leftjoin('categories', 'categories.id', '=', 'courses.CategoryID')
        ->select('courses.*', 'categories.name as categoryName')
        ->get();

        return view('showCourse')->with('courses',$courses);
    }

    //Add Course
    public function addCourse(){
        $r=request();
        $image=$r->file('courseImage');        
        $image->move('images',$image->getClientOriginalName());               
        $imageName=$image->getClientOriginalName(); 
        $addCourse=Course::create([
            'name'=>$r->courseName,
            'amount'=>$r->amount,
            'time'=>$r->courseTime,
            'month'=>$r->courseMonth,
            'module'=>$r->courseModule,
            'CategoryID'=>$r->CategoryID,
            'description'=>$r->description,
            'image'=>$imageName,
            'teacher'=>Auth::user()->id,
        ]);
            Return redirect()->route('showCourse');
    }

    //Show User
    public function showUser(){
        $users = DB::table('users')
        //-get();
        ->paginate(5);

        return view('showUser')->with('users',$users);
    }

    //Show Plan
    public function showPlan(){
        $plans = DB::table('plans')
        ->paginate(3);

        return view('stripe.showPlan')->with('plans',$plans);
    }
}
