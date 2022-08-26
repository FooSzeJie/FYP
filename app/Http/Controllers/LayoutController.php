<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use App\Models\Material;
use App\Models\Course;
use Session;

class LayoutController extends Controller
{
    public function showMaterial(){
        $materials=Material::all();
        return view('EnrollClass')->with('materialed',$materials);
    }

    public function viewMaterial(){
        $materials=DB::table('materials')
        ->select('materials.*')
        ->get();
        return view('viewMaterial')->with('materialed',$materials);         
    }

    public function enterMaterial($id){
        $materials=Material::all()
        ->where('id',$id)
        ->leftjoin('courses', 'courses.id', '=', 'Materials.courseID');

        Return redirect()->route('viewMaterial');
    } 
}
