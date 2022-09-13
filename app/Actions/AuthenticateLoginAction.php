<?php 

namespace App\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Http\Requests\LoginRequest;

class AuthenticateLoginAction {
    function __invoke(LoginRequest $request)
    {   
        $element = User::query()->where("matricule",$request->matricule)->first();
        if($element && Hash::check($request->password,$element->password)){
            return $element;
        }
        
    }
}