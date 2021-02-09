<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
$funds;
class fundController extends Controller
{
   
    public function addfunds()
    {
     return view ('add-funds');  //
    }
    
    public function savefund(Request $request)
    {
     DB::table('funds')->insert([
        'fund_source'=>$request ->fund_source,
        'Amount'=>$request ->Amount,
     ]); 
     return back()->with('fund-add', 'fund addad successfully');//
    }
    public function fundlist()
    {
      $funds = DB::table('funds') ->get();
      return view('funds-list',compact('funds'));
    }//
  }
  
