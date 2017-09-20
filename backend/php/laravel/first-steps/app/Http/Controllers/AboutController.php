<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class AboutController extends Controller
{
    /**
     * @return Factory|View
     */
    public function __invoke()
    {
        return view('about', [
            'title' => 'Portada',
            'subtitle' => 'Laravel'
        ]);
    }
}
