<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    function index(){
        $elements = auth()->user()->chef->elements;
        return view("element.index",[
            "elements"=>$elements
        ]);
    }
}
