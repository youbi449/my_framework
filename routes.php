<?php

use App\Router;

use Controller\TestController;

Router::get('/', [TestController::class, 'index']);
