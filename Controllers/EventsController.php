<?php

namespace App\Http\Controllers;



//use App\Events;
use App\SingleEvent;
use Illuminate\Http\Request;

class EventsController extends Controller
{
  function index(){

     $events=SingleEvent::get();



$i=1;
foreach($events as $new){
  $new->br=$i;
   $oo[]=$new;
  $i++;
  if($i>3){
    $i=1;
  }
}

// $chunk=array_chunk($oo,3);


  return response()->json($events);
  }
}
