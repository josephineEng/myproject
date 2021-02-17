<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class patientController extends Controller
{
    public function patientslist()
    {
      $patients = DB::table('patients') ->get();
      return view('patients',compact('patients'));
      }  //
}
