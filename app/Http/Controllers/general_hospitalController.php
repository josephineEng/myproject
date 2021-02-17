<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class general_hospitalController extends Controller
{
    public function general_hospitallist()
    {
      $general_hospitals = DB::table('general_hospitals') ->get();
      return view('general hospitals',compact('general_hospitals'));
      }  
}
