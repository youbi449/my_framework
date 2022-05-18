<?php

namespace Controller;

use App\Controller;

class TestController extends Controller
{

    public function index()
    {
        return $this->view->render('index', ['name' => "ayoub", 'age' => 23]);
    }
}
