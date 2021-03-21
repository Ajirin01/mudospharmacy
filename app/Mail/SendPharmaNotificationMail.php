<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPharmaNotificationMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $data;
    public function __construct($data)
    {
        //
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(){
        return $this->from("hhoollaaggookkee.space@gmail.com")
                    ->to('mubarakolagoke@gmail.com')
                    ->subject('Subject: prescription awaiting confirmation')
                    ->view('mails.confirmPrescription')
                    ->with('email',$this->data);
    }
}
