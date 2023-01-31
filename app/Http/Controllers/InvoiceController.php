<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index($bookingId)
    {
        $booking = Booking::find($bookingId);
        return view('invoice', [
            'booking' => $booking
        ]);
    }

    public function download ($bookingId)
    {
        $booking = Booking::find($bookingId);

        $pdf = Pdf::loadView('pdfs.invoice', ['booking' => $booking]);
        return $pdf->download('invoice.pdf');
    }
}
