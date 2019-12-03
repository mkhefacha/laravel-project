<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RegisterMail extends Mailable
{
    use Queueable, SerializesModels;
    public $user;

    public function __construct($user)

    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->markdown('emails.register')
            ->subject('valider mon compte')
            ->from('marwen@gmail.com');

    }



}
