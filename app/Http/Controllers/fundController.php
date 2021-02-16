<?php

namespace App\Http\Controllers;
USE DB;
use Illuminate\Http\Request;

class fundController extends Controller
{
    public function addfund(){
        return view ("add-funds");
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
    }
    public function editfund($id){
      $funds =DB::table('funds') ->where('id',$id) ->first();
      return view('edit-funds',compact('funds'));
  
    }
   
    public function updatefund (Request$request){
      DB::table('funds')-> where('id',$request->id)->update([
        'fund_source'=>$request->fund_source,
        'Amount'=>$request->Amount
      
      ]);
      return back() ->with('fund-update','fund updated successfuly');
    }

    public function deletefund($id){
  DB::table('funds')->where('id',$id)->delete();
  return back()->with('fund-delete','fund deleted');
    }
  }
  


