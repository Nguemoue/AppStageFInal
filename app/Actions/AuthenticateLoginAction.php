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
                return $element;

            } else if ($el = $element->element) {
                session()->put('element', $el);
                return $element;

            } else {
                return null;
            }
        }

    }
}
