<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Sendmail extends Mailable
{
    use Queueable, SerializesModels;
    public $carts;
    public $orders;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($carts, $orders, $user)
    {
        $this->carts = $carts;
        $this->orders = $orders;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('orthopedicDoctor.modules.OrderOrthopedicImplants.email');
    }
}
