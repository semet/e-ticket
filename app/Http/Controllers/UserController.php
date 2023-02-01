<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile');
    }

    public function order()
    {
        $orders = Booking::where('user_id', auth()->id())
            ->orderBy('date')
            ->get();

        return view('user.order', [
            'orders' => $orders
        ]);
    }

    public function setting()
    {
        return view('user.settings');
    }

    public function message()
    {
        return view('user.message');
    }
}
