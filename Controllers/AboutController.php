<?php

namespace App\Http\Controllers;


use App\Staff;
use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
  function index(){

     $about=About::get();
    $staff=Staff::get();
  return response()->json([$about,$staff]);
  }
}
