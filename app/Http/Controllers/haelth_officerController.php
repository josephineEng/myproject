<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
$health_officers;
class health_officerController extends Controller
{
   public function addhealth_officer()
    {
return view('add-health_officer');
   }
  public function savehealth_officer(Request $request) {
    DB::table('health_officers')->insert([
        'NIN'=>$request->NIN,
        'Name'=>$request->Name,
        'Gender'=>$request->Gender
    ]);
    return back()->with('health_officer_add', 'health_officer addad successfully');
  }
  public function health_officerlist()
  {
    $health_officers = DB::table('health_officers') ->get();
    return view('health_officer-list',compact('health_officers'));
  }//

  public function edithealth_officer($id){
    $health_officers =DB::table('health_officers') ->where('id',$id) ->first();
    return view('edit-health_officer',compact('health_officers'));

  }
  public function updatehealth_officer (Request$request){
    DB::table('health_officers')-> where('id',$request->id)->update([
      'NIN'=>$request->NIN,
      'Name'=>$request->Name,
      'Gender'=>$request->Gender
    ]);
    return back() ->with('health_officer_update','health_officer updated successfuly');
  }
  public function deletehealth_officer($id){

  }

}
