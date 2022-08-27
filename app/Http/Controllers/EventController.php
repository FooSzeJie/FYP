<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; //import Database Library
use App\Models\Event; 
use File;

class EventController extends Controller
{
    public function index(){
        return view('EMathEvent')
        -> with('events',Event::all());
    }

    public function addName(){
        $r = request();   //received the data by GET or POST method $_POST['name']
        
        $events = Event :: create([
            'name' => $r->name,
            'score'=>$r->score
        ]);

        $data = Event::latest('id')->first();
        $id = $data->id;
        
        Return redirect()->route('editEMathGame', $id)->with('events',$events);
        //Return view('EMathGame') -> with('events', $event);

        //Return view('EMathGame');
        //return redirect('EMathGame/'.$id);
    }

    public function editScore($id)
    {
        $event = Event::all()->where('id', $id);
        Return view('EMathGame')->with('events',$event);
    }

    public function updateScore()
    {
        $r=request();
        /*
        DB::table('shortcontacts')
        ->where('id',($data->mobile))
        ->orderBy('id','desc')
        ->first()
        ->update(['name'=>'$r->playerName', 'score'=>'$r->playerScore']);*/
        /*
        $event = Event::orderBy('created_at', 'desc')->first();
        $event->score = $r->playerScore;
        $event->save();
        */
        
        $event = Event::find($r->playerID);

        //$event->name = $r->playerName;
        $event->score = $r->playerScore;
        $event->save();
        
        $data = Event::latest('id')->first();
        $id = $data->id;

        /*
        $id= Event::orderBy('id', 'DESC')->get();
        $last2 = DB::table('events')->orderBy('id', 'DESC')->first();
        
        $last = DB::table('events')->latest('id')->first();
        $last_row = DB::table('events')->latest("id")->first();
        $last3 = DB::table('events')->latest()->first();
        $last_row = DB::table('events')->orderBy('id', 'DESC')->first();
        */

        Return redirect()->route('printEMathGame', $id)->with('events',$event);
        //Return view('printEMathGame/', [$event->id])->with('events',$event);
        //Return view('EMathScore')->with('events',$event);
    }

    public function printEMathGame($id){
        $event = Event::all()->where('id',$id);        

        Return view('EMathCerificate')->with('events',$event);
    }

    public function showScore(){
        $showScore = Event::all();
        //->where('score', \DB::raw("(select max(`score`) from orders)"))->get();
        Return view('EMathScore')->with('events', $showScore);
    }
}
