<?php

namespace App\Http\Controllers;

use App\Home;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  function index(){

    $home_page= Home::get();

  return response()->json($home_page);
  }
}
