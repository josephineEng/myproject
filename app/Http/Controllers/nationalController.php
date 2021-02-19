<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class nationalController extends Controller
{
    public function nationallist()
    {
      $national = DB::table('national') ->get();
      return view('national referral hospitals',compact('national'));
      }   
}
