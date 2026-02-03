<?php

namespace Framework;

class Kernel
{
    public function __construct()
    {
    }

    public function handle(Request $request): Response
    {
        $queryParametersString = implode('<br>  ', $request->queryParameters);
        $postParametersString = implode('<br>  ', $request->postParameters);
        return new Response(
            "Request method: $request->method<br>
                Requested path: $request->path<br>
                Query parameters:<br>
                  $queryParametersString<br>
                Post parameters:<br>
                  $postParametersString"
        );
    }
}
