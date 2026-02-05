<?php

namespace App\Controllers;

use Framework\Response;

class HomeController
{
    public function index(): Response
    {
        return new Response('Welcome to Taskey', responseCode: 200);
    }
    public function about(): Response
    {
        return new Response('Taskey is a task management application; right there in your browser.', responseCode: 200);
    }
}
