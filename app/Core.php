<?php

namespace App;

use App\Router;

require_once '../routes.php';
class Core
{

    private $routes;
    private $path;
    private $method;
    public function __construct()
    {
        $this->routes = Router::getRoutes();
        $this->path = $_SERVER['REQUEST_URI'];
        $this->method = $_SERVER['REQUEST_METHOD'];
    }
    public function run()
    {
        if ($this->path[-1] === "/") {
            header('Location: ' . substr($this->path, 0, -1));
        }
        $this->callRoute();
    }


    public function callRoute()
    {
        return array_key_exists($this->path, $this->routes[$this->method])
            ? $this->routes[$this->method][$this->path]()
            : $this->page404();
    }

    public function page404()
    {
        echo "404 not found";
    }
}
