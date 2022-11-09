<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $token;
    public $clientUrl;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user, $token, $clientUrl)
    {
        $this->user = $user;
        $this->token = $token;
        $this->clientUrl=$clientUrl;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject('Restablecer contraseña')
                    ->view('emails.resetPassword')
                    ->with([
                        'user'=> $this->user,
                        'token'=> $this->token,
                        'clientUrl'=>$this->clientUrl
                    ]);
    }
}
