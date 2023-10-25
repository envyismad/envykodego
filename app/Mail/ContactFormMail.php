<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormMail extends Mailable
{
    use Queueable, SerializesModels;

    public $details;

    public function __construct($details)
    {
        $this->details = $details;
    }

    public function build()
{
    return $this->view('emails.contact-form')
                ->from($this->formData['email'], $this->formData['firstName'] . ' ' . $this->formData['lastName'])
                ->subject('New Contact Form Submission')
                ->with([
                    'data' => $this->formData,
                ]);
}

}
