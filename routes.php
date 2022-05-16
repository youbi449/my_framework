<?php

use App\Router;


Router::get('/testing', function () {
    echo "test";
});
Router::get('/tested', function () {
    echo "tested";
});
