<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactResponse extends Mailable
{
    use Queueable, SerializesModels;
    protected $email;
    protected $name;
    protected $msg;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email , $name , $msg)
    {
        //
        $this->email = $email;
        $this->name = $name;
        $this->msg = $msg;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail.contact')->with([
            'email' => $this->email ,
            'name' => $this->name ,
            'msg' => $this->msg ,
        ]);
    }
}
