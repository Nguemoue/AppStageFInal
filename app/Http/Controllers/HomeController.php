<?php

namespace App\Http\Controllers;

use App\Models\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class HomeController extends Controller
{
    //
    function first_login(){
        
        return view("first_login");
    }

    function store_flog(Request $request){
        $request->validate([
            "login"=>"required",
            "password"=>["required",Password::defaults()]
        ]);

        $data = Authenticate::query()->select("login","password")->where("login","=",$request->input("login"))->first();
        
        if($data == null){
            return redirect()->back()->withErrors("Identifiants ou mot de passe Incorrect !");
        }else{
            
            if(Hash::check($request->input("password"),$data->password)){
                return redirect()->back()->withErrors("Identifiants ou mot de passe Incorrect  !");
            }else{
                //les donnees sont bien et bel valide
                session()->put("_pass",true);
            }
        }
        return redirect()->route("home")->withSuccess("Connexion reussie");

    }

}
