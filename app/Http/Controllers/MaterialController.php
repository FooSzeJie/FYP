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

        $material=$r->file('materials');        
        $material->move('files',$material->getClientOriginalName());                    
        $fileName=$material->getClientOriginalName(); 

        $addMaterial=Material::create([
            'name'=>$r->materialName,
            'video'=>$videoName,
            'description'=>$r->description,
            'materials'=>$fileName,
            'courseID'=>$r->courseID,
        ]);
            Return redirect()->route('viewMaterial');
    }

    public function showMaterial(){
        $materials=Material::all();
        return view('showMaterial')->with('materialed',$materials);
    }

    public function viewMaterial(){
        $materials=DB::table('materials')
        ->select('materials.*')
        ->get();
        return view('viewMaterial')->with('materialed',$materials);         
    }
}
