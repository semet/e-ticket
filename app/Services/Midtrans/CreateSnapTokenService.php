<?php

namespace App\Services\Midtrans;

use App\Models\Booking;
use App\Models\Destination;
use Midtrans\Snap;

class CreateSnapTokenService extends Midtrans
{
    public function __construct(
        public Booking $booking,
        public int $price
    )
    {
        parent::__construct();
    }

    public function getSnapToken()
    {
        $params = [
            'transaction_details' => [
                'order_id' => $this->booking->number,
                'gross_amount' => $this->price,
            ],
            'item_details' => [
                [
                    'id' => 1,
                    'price' => $this->booking->type == 'couple' || $this->booking->type == 'family' ?  $this->price : $this->booking->destination->price,
                    'quantity' =>  $this->booking->type == 'couple' || $this->booking->type == 'family' ? 1 : $this->booking->passengers->count() ,
                    'name' => $this->booking->destination->name,
                ],
            ],
            'customer_details' => [
                'first_name' => 'Martin Mulyo Syahidin',
                'email' => 'mulyosyahidin95@gmail.com',
                'phone' => '081234567890',
            ]
        ];

        return Snap::getSnapToken($params);
    }
}
