<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class regionalController extends Controller
{
    public function regionallist()
    {
      $regional = DB::table('regional') ->get();
      return view('regional referral hospitals',compact('regional'));
      }    
}
