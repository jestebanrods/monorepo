<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * @return string
     */
    public function first(): string
    {
        return 'First Page';
    }

    /**
     * @return string
     */
    public function second(): string
    {
        return 'Second Page';
    }
}
