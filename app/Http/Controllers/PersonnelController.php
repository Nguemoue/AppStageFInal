<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    function index(){
        $elements = auth()->user()->chef->elements;
        return view("element.index",[
            "elements"=>$elements
        ]);
    }

    function list(){
        $users = User::query()->with("element")->paginate(4);
        return view('personnels.list',compact('users'));
    }
}
