<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterielController extends Controller
{
   function index(){
    $materiels = auth()->user()->chef->materiels;
    return view("materiel.index",[
        "materiels"=>$materiels
    ]);
   }

}
