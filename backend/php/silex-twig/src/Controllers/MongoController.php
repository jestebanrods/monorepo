<?php

namespace jestebanrs\Controllers;


use MongoDB\BSON\Regex;
use MongoDB\Client;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MongoController
{
    public function index(Request $request)
    {
        return new Response($request->query->get('name'));
    }
}