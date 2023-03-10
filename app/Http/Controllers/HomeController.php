<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $destinations = Destination::orderBy('status', 'desc')->get();
        return view('welcome', [
            'destinations' => $destinations
        ]);
    }
}
