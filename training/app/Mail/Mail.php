<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
    public $email;
*/
    public $email;
    public function __construct($email)
    {
    $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
//    public function build()
//    {
//        return $this->markdown('emails.mail_system');
//    }

    public function build()
    {
        return $this
            ->subject('Thank you for subscribing to our newsletter')
//
                ->markdown('mail.exampleMail');
    }
}
