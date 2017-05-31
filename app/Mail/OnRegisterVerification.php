<?php

namespace App\Mail;

use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use App\ModelAdapters\UserAdapter as User;

class OnRegisterVerification extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The User instance.
     *
     * @var user
     */
    protected $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function build()
    {
        return $this->view('emails.home.on-register-verification')
                    ->with([
                        'token' => $this->user->token,
                    ]);
    }
}
