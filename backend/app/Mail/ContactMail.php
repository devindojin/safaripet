<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contactInfo;
  
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactInfo)
    {
        $this->contactInfo = $contactInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view('view.name');
        return $this->subject('Mail from Safaripet Center')
                    ->view('emails.contactMail');
    }
}
