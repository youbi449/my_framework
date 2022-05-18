<?php


namespace App;


class Router
{

    static protected $ROUTES;

    /**
     * @param string $uri url given
     * @param string $callback function called after page is triggered 
     */
    static public function get($uri, $callback)
    {
        self::$ROUTES["GET"][$uri] = $callback;
    }
    /**
     * @param string $uri url given
     * @param string $callback function called after post request is called 
     */
    static public function post($uri, $callback)
    {
        self::$ROUTES['POST'][$uri] = $callback;
    }

    public static function getParamsFromUri($uri)
    {
        //TODO 
        $routes = explode('/', $uri);
        if ($routes[0] === "") {
            array_shift($routes);
        }
        return $routes;
    }

    static public function getRoutes()
    {
        return self::$ROUTES;
    }
}
