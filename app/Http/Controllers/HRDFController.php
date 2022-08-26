<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use DB;
use App\Models\Hrdf;
use App\Models\User;
use Auth;
use Session;

class HRDFController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function uploadHRDF(){
        
        $r=request();
        $hrdf=$r->file('HRDFForm');        
        $hrdf->move('files',$hrdf->getClientOriginalName());               
        $hrdfForm=$hrdf->getClientOriginalName(); 
        $addHrdf=Hrdf::create([
            'userID' => Auth::user()->id,
            'hrdfForm'=>$hrdfForm,
            'status' => $r-> status,
        ]);

        Session:: flash('success',"HRDF form was upload Successfully!");
            //Return redirect()->asset('uploadHrdf');
            return view('uploadHrdf');
    }


    public function showHRDF(){

        $hrdf = DB::table('hrdfs')
        ->leftjoin('users', 'users.id', '=', 'hrdfs.userID')
        ->select('hrdfs.*', 'users.name as userName')
        ->get();
        return view('showHRDF')->with('hrdfs',$hrdf);
    }       

    public function updateHRDF($id) {
        $hrdf = Hrdf::find($id);
        
        $hrdf->status = 'approve';
        $hrdf->save();

        Return redirect()->route('showHrdf');
    }

    public function RejectHRDF($id) {
        $hrdf = Hrdf::find($id);
        
        $hrdf->status = 'reject';
        $hrdf->save();

        Return redirect()->route('showHrdf');
    }
}
