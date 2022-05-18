<?php

namespace Controller;

use App\Response;

class TestController
{
    public function __construct()
    {
        echo "sheesh";
    }

    public function randomResponse()
    {
        $response = new Response();
        return $response->setHeaders(['jwt' => 123])->body(['error' => "Wrong password"])->JSON();
    }
}
