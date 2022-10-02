<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
   function __construct()
   {
      $this->middleware("auth");
   }

   function __invoke(Request $request){
       #je verifie l'utilisateur connecter
       $connectedUser = $request->user()->getPersonnelName();
       if(Str::lower($connectedUser) == "chef"){
            return view("dashboard.chef_dashboard");
       }elseif(Str::lower($connectedUser) == "element"){
            return view("dashboard.element_dashboard");
       }else{
           return redirect()->route("home");
       }

   }

}
