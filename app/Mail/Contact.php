<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Contact extends Mailable
{
    use Queueable, SerializesModels;

    protected $email;
    protected $name;
    protected $phone;
    protected $message;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($email, $name, $phone, $message)
    {
        $this->email = $email;
        $this->name = $name;
        $this->phone = $phone;
        $this->message = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->email)->subject('')->view('emails.Contact')->with([
            'encryptedemail' => base64_encode($this->email),
            'clients_name' => $this->name,
            'clients_description' => $this->message,
            'clients_phone' => $this->phone,
        ]);
    }
}
