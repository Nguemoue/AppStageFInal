<?php

namespace App\Http\Controllers;

use App\Models\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\MessageBag;
use Illuminate\Validation\Rules\Password;

class HomeController extends Controller
{
    //
    function __construct()
    {
        
    }
    function first_login(){
        
        return view("first_login");
    }

    function store_flog(Request $request){
        
        $request->validate([
            "login"=>"required|min:4",
            "password"=>["required",Password::defaults()->letters()->min(8)]
        ]);

        $data = Authenticate::query()->select("login","password")->where("login","=",$request->input("login"))->first();
        // dd($data);
        if($data == null){
            return redirect()->back()->withErrors(new MessageBag(["login"=>"Identifiants ou mot de passe Incorrect !","password"=>"identifiants ou mot de passwe incorrect "]));
        }else{
            if(!Hash::check($request->input("password"),$data->password)){
                return redirect()->back()->withErrors(new MessageBag(["login"=>"Identifiants ou mot de passe Incorrect !","password"=>"identifiants ou mot de passwe incorrect "]));
            }else{
                //les donnees sont bien et bel valide
                session()->put("_pass",true);
            }
        }
        return redirect()->route("home")->withSuccess("Connexion reussie");

    }

    function home(){
        return view("home");
    }

    function search(Request $request){
        $data = $request->input("q");
        $filter = $request->input("filter");
        // j'effectue ma requetes
        if($filter == null or $data == null){
            return redirect()->back()->with('messages.info',"les donnes ne sont pas valide pour la recherche");
        }
        // je selectionne la ville

    }

}
