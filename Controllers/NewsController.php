<?php

namespace App\Http\Controllers;



use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  function index(){

     $news=News::get();



$i=1;
foreach($news as $new){
  $new->br=$i;
   $oo[]=$new;
  $i++;
  if($i>3){
    $i=1;
  }
}
// return $chunk=collect($oo)->chunk(3);
 $chunk=array_chunk($oo,3);


  return response()->json($chunk);
  }
}
