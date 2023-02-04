<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    public function index($id)
    {
        $destination = Destination::where('id', $id)->with(['schedules'])->first();

        return view('destination', [
            'destination' => $destination
        ]);
    }
}
