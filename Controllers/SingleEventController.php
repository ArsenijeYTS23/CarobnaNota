<?php

namespace App\Http\Controllers;



use App\SingleEvent;
use App\EventVideo;
use Illuminate\Http\Request;

class SingleEventController extends Controller
{
  function index($id){

        $events=SingleEvent::where('id',$id)->with('eventpics')
        ->with((array('eventvideos' => function($query){ $query->orderBy('height','asc'); })))->find($id);
          // $events=SingleEvent::where('id',$id)->with('eventpics')->with('eventvideos')->find(1);

    // $events->eventvid=$events->eventvideos->sortBy('height');
//    return $events;


  return response()->json($events);
  }
}
