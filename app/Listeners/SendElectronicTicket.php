<?php

namespace App\Listeners;

use App\Events\PaymentSuccessful;
use App\Mail\TicketMail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class SendElectronicTicket
{

    //    public string $connection = 'database';
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\CheckoutSuccess  $event
     * @return void
     */
    public function handle(PaymentSuccessful $event)
    {
        $event->booking->passengers()->each(function ($passenger) use ($event) {
            return Mail::to($passenger->email)->send(new TicketMail($event->booking, $passenger));
        });
    }
}
