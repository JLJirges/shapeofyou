<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class FutureLetter extends Mailable
{
    use Queueable, SerializesModels;
    public $futureLetter;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(\App\FutureLetter $futureLetter)
    {
        $this->futureLetter = $futureLetter;
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {


        return $this->subject($this->futureLetter->LetterTitle)->text('email.futureletter');
    }
}
