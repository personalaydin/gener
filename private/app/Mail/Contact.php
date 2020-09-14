<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    public $request;

    /**
     * Create a new message instance.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact', [
            'request' => $this->request,
        ])->replyTo($this->request->email, sprintf('%s %s', $this->request->name, $this->request->surname))
            ->subject(sprintf('%s - İletişim - %s %s', config('app.name'), $this->request->name, $this->request->surname));
    }
}
