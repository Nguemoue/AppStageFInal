<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Laravel\Fortify\Http\Requests\LoginRequest;

class AuthenticateLoginAction
{
    public function __invoke(LoginRequest $request)
    {
        $element = User::query()->where("matricule", $request->matricule)->first();

        if ($element && Hash::check($request->password, $element->password)) {
            if ($chef = $element->chef) {
                session()->put('chef', $chef);
                session()->flash("success","Identification reussi ! vous etes connecter en tant que Element");
                return $element;

            } else if ($el = $element->element) {
                session()->put('element', $el);
                session()->flash("success","Identification reussi ! vous etes connecter en tant que Chef");

                return $element;

            } else {
                return null;
            }
        }

    }
}
