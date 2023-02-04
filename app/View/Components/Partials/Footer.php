<?php

namespace App\View\Components\Partials;

use App\Models\DestinationPicture;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $pictures = DestinationPicture::all()
            ->random()
            ->limit(10)
            ->get();
        return view('components.partials.footer', [
            'pictures' => $pictures
        ]);
    }
}
