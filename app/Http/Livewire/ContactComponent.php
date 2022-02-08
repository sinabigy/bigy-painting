<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use App\Mail\Contact as MailContact;
use Livewire\Component;

class ContactComponent extends Component
{

    public $email;
    public $name;
    public $phone;
    public $message;



    public function updated($fields) {
        $this->validateOnly($fields,[
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:3',
            'message' => 'required|min:6',
        ]);
    }

    public function addAppraisal()
    {
        $this->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required|min:3',
            'message' => 'required|min:6',
        ]);
        $email_address = "info@creativekiwi.nz";
        Mail::to($email_address)->send(new MailContact($this->email,$this->name,$this->phone,$this->message));
        session()->flash('message', 'Enquiry has been sent successfully!');
    }


    public function render()
    {
        return view('livewire.contact-component');
    }
}
