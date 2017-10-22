<?php

namespace App\Http\Controllers;

class ListController extends Controller
{
    public function __invoke()
    {
        $list = [
            'https://www.youtube.com/' => 'YouTube',
            'https://www.gitlab.com/' => 'GitLab',
            'https://www.facebook.com/' => 'Facebook'
        ];

        return view('list', [
            'list' => $list
        ]);
    }
}
