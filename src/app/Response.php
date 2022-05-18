<?php

namespace App;


class Response
{
    public $status = 200;
    public $body;
    public $headers = [];


    public function setStatus(int $status)
    {
        $this->status = $status;
        return $this;
    }

    public function setHeaders(array $headers)
    {
        $this->headers = $headers;
        return $this;
    }

    public function body(string|array $body)
    {
        $this->body = $body;
        return $this;
    }

    public function JSON()
    {
        $this->body = json_encode($this->body);
    }

    public function __destruct()
    {
        foreach ($this->headers as $key => $value) {
            header($key . ": " . $value);
        }
        header('HTTP/1.1 ' . $this->status);
        echo $this->body;
    }
}
