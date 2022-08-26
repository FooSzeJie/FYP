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
            'name'=>$r->playerName,
            'score'=>$r->score
        ]);

        $find = Event::all()->where('id');
        Return view('EMathGame') -> with('events', $find);

        //Return view('EMathGame');
        //return redirect('EMathGame/'.$id);
    }

    public function store() {

        $input = Event::all();
        $id = Event::create($input)->id;
    
        return redirect('company/'.$id);
    }

    public function editScore($id)
    {
        $event = Event::all()->where('id', $id);
        Return redirect()->route('EMathScore');
    }

    public function updateScore()
    {
        $r=request();
        $event = Event::find($r->playerID);

        $event->name = $r->playerName;
        $event->score = $r->score;
        $event->save();

        Return redirect()->route('EMathScore');
        //Return view('EMathScore')->with('events',$event);
    }

    public function showScore(){
        $showScore = Event::all();
        //->where('score', \DB::raw("(select max(`score`) from orders)"))->get();
        Return view('EMathScore')->with('events', $showScore);
    }
}
