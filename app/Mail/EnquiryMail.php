<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EnquiryMail extends Mailable
{
  use Queueable, SerializesModels;

  /**
   * Create a new message instance.
   *
   * @return void
   */
  public function __construct($mailData)
  {
    $this->company = $mailData['company'];
    $this->name = $mailData['name'];
    $this->message = $mailData['message'];
    $this->from_email = $mailData['email'];
    $this->email = $mailData['email'];
    $this->phone = $mailData['phone'];
    $this->city = $mailData['city'];
    $this->country = $mailData['country'];
    $this->postcode = $mailData['postcode'];
    $this->website = $mailData['website'];

  }

  /**
   * Build the message.
   *
   * @return $this
   */
  public function build()
  {
        return $this->subject($this->subject)->view('web.enquiry_email', ['company' => $this->company,
            'name' => $this->name,
            'subject' => $this->subject,
            'mail_message' => $this->message,
            'email' => $this->email,
            'phone' => $this->phone,
            'city' => $this->city,
            'country' => $this->country,
            'postcode' => $this->postcode,
            'website' => $this->website,
        ]);
    }
}
