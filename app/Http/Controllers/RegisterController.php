<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\User;
use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;
class RegisterController extends Controller
{


    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }



    protected function store(RegisterRequest $request )
    {
        /*  $user= User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);*/


       // $user=User::persist($request);

          $user=$request->persist($request);

        return redirect('home')->with([

            'message'=> "{$user->name}il faut valider votre compte pour creer des nouveaux produits!! "


        ]);
    }


}
