<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function create(){

        return view('auth.login');

    }



    public function store(LoginRequest $request)
    {

        if (!auth()->attempt(request(['email','password']))) {

            return back()->with('danger', 'merci de vierifier votre mail ou mot de passe ');
        }

        {
            return redirect('/home');

        }


    }


    public function destroy()
    {

        auth()->logout();
        return redirect('/home');
    }
}


