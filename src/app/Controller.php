<?php

namespace App;

use App\Response;
use App\View;

class Controller
{
    protected $view;
    protected $response;

    public function __construct()
    {
        $this->view = new View();
        $this->response = new Response();
    }
}
