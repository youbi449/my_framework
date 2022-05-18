<?php

use App\Router;
use App\Response;

Router::get('/testing', function () {
    $response = new Response();
    return $response->setHeaders(['jwt' => 123])->body(['error' => "Wrong password"])->JSON();
});
Router::post('/sheesh', function () {
    echo "sheesh";
});
