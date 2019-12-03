<?php

namespace App\Http\Requests;
use App\Notifications\SendUserMailAferRegister;
use App\User;
use App\Mail\RegisterMail;
use Notification;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:2', 'confirmed'],

        ];
    }


    public function messages()
    {
        return [


            'name.required' => "le nom est  obligatoire",
            'email.required' => "l'email est obligatoire",
            'password.required' => "merci de saisie votre mot de passe ",

        ];
    }


    public function persist($request)
    {
        $request['token'] = str_random(25);
        $user = User::create($request->all());

     //   Mail::to($user)->send(new RegisterMail($user));
   // Notification::send($user,new SendUserMailAferRegister());
    $user->notify(new SendUserMailAferRegister());
        auth()->login($user);
        return $user;

    }

}
