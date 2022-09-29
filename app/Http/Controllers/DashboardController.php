<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   function __construct()
   {
      $this->middleware("auth");
   }

   function __invoke(Request $request){
      dd($request->user()->getPersonnel());
      return view('dashboard');
   }
   
}
