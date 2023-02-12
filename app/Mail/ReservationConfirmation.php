<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationConfirmation extends Mailable
{
    use Queueable, SerializesModels;


        /**
     * The reservation details.
     *
     * @var array
     */
    public $reservation;
    /**
     * Create a new message instance.
     * @param array $reservation
     * @return void
     */
    public function __construct(array $reservation)
    {
        $this->reservation = $reservation;
    }

    public function build()
    {
        return $this->subject('Uspješna rezervacija')
                    ->view('emails.reservation');
    }
}
