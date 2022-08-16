<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Auth;
use App\Models\User;

class TeacherController extends Controller
{
    public function show(){
        $teachers=User::all();
        return view('viewTeacher')->with('teachers',$teachers);
    }

    
}
