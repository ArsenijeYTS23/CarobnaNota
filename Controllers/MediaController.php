<?php

namespace App\Http\Controllers;



use App\Media;
use App\Img_media;
use App\Vid_media;
use Illuminate\Http\Request;

class MediaController extends Controller
{
  function index(){
  $img_media=Img_media::get();
  $vid_media=Vid_media::orderBy('height','asc')->get();
  return response()->json([$img_media,$vid_media]);
  }
}
