<?php

namespace App\Controllers;

use Framework\Response;

class TaskController
{
    public function index(): Response
    {
        return new Response('Task list', responseCode: 200);
    }
    public function create(): Response
    {
        return new Response('Create a task', responseCode: 200);
    }
}
