<?php

namespace App\Http\Controllers;

use App\Models\Materiel;
use Illuminate\Http\Request;

class MaterielController extends Controller
{
   function index(){
    $materiels = auth()->user()->getPersonnel()->unite->materiels;
    $allMateriels = Materiel::query()
        ->with("typeMateriel")->join("type_materiels","type_materiel","=",
        "type_materiels.id"
    )->groupBy("nom")->where("unite_id","=",auth()->user()->getPersonnel()->unite_id)
        ->selectRaw("count(type_materiel) as nb , nom")->get();
    return view("materiel.index",[
        "materiels"=>$materiels,
        "allMateriels"=>$allMateriels
    ]);
   }

}
