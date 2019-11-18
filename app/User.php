<?php

namespace App;

use App\Mail\RegisterMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{

    use Notifiable;
    use HasRoles;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'token', 'email_verified_at'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function products()
    {
          return $this->hasMany('App\Product');

    }


    public function verified()
    {

        return $this->token === null;
    }


    public function SetPasswordAttribute($password)
    {

        $this->attributes['password'] = Hash::make($password);

    }
   /* public function SetTokenAttribute($token)
    {

        $this->attributes['token'] = str_random($token, 25);

    }*/


    /*public static function persist($request)
    {
        $request['token'] = str_random(25);
        $user = static::create($request->all());

        Mail::to($user)->send(new RegisterMail($user));

        auth()->login($user);
        return $user;

    }*/

}
