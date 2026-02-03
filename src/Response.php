<?php

namespace Framework;

class Response
{
    public int $responseCode;
    public string $body;
    public ?string $header;
    public function __construct(string $body, ?string $header = null, int $responseCode = 404)
    {
        $this->body = $body;
        $this->responseCode = $responseCode;
        $this->header = $header;
    }

    public function echo(): void
    {
        echo $this->body;
        if ($this->header) {
            header($this->header);
        }
        http_response_code($this->responseCode);
    }
}
