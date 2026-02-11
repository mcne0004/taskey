<?php

namespace Framework;

class ResponseFactory
{
    public function body(string $body): Response
    {
        return new Response($body, responseCode: 200);
    }
    public function notFound(): Response
    {
        return new Response('Requested resource not found.', responseCode: 404);
    }
}
