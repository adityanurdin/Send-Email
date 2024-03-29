<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public $send;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($send)
    {
        $this->send = $send;
    }
 
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(\env('MAIL_FROM_ADDRESS'))
        ->subject('Penawaran Baru '. $this->send['nama_perusahaan'])
        ->view('emails.template_send_email')
        ->with('send', $this->send);
    }
    
}
