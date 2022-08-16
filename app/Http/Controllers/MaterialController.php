<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Material;
use App\Models\Course;

class MaterialController extends Controller
{
    public function addMaterial(){
        $r=request();
        $video=$r->file('video');        
        $video->move('videos',$video->getClientOriginalName());               
        $videoName=$video->getClientOriginalName(); 
        $addMaterial=Material::create([
            'name'=>$r->materialName,
            'video'=>$videoName,
            'description'=>$r->description,
            'courseID'=>$r->courseID,
        ]);
            Return redirect()->route('viewMaterial');
    }

    public function showMaterial(){
        $materials=Course::all();
        return view('showMaterial')->with('materials',$materials);
    }

    public function viewMaterial(){
        $materials=DB::table('materials')
        ->select('materials.*')
        ->get();
        return view('viewMaterial')->with('materials',$materials);         
    }
}
