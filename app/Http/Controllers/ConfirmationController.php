<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ConfirmationController extends Controller
{
    public function store(User $user, $token)
    {
        if ($user->exists) {

            $user->update([

                'email_verified_at' => now(),
                'token' => null

            ]);
            return redirect('home')->with('message', "compte validé !");
        }
        return redirect('home')->with('message', "l'utilisateru n'existe pas !!");
    }
}