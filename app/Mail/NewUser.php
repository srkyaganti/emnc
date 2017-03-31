<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class NewUser extends Mailable
{
    use Queueable, SerializesModels;

    protected $email;
    protected $code;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $code)
    {
        // Better to hash it but should avoid '/' during hashing
        $this->email = $email;
        $this->code = $code;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.newuser')
                    ->subject('EnergyMNC: Activate your account')
                    ->with([
                        'email' => $this->email,
                        'code' => $this->code
                        ]);
    }
}
