<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($request, $product)
    {
        //
        $this->email = $request->email;
        $this->name = $request->name;
        $this->messages = $request->messages;
        $this->product = $product;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('view.name')
        ->from('info@ielse.be')
        ->cc('info@ielse.be')
        ->bcc('ilsedemey1@gmail.com')
        ->subject('info aanvraag op ielse.be')
        ->view('emails.contact')
        ->with([
            'name' => $this->name,
            'email' => $this->email,
            'messages' => $this->messages,
            'product' => $this->product
        ]);



    }
}
