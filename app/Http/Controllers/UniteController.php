<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UniteController extends Controller
{
    function __construct(Request $request){

    }
    function index(Request $request){
        $unite =  auth()->user()->getPersonnel()->unite;
        return view("unite.index",[
            "unite"=>$unite
        ]);
    }
}
