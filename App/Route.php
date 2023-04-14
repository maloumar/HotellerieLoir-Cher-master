<?php
namespace App;

use App\App_Exceptions;
class Route
{
    static private $dispatcher;
    static private $routes = [];
    static function Start():void
    {
        
    }
    static function SetRoutes(array $routes):void
    {
        self::$routes = $routes;
    }
    static function Set(array $method,string $url,array $class):void
    {
        self::$routes[$url] = ['method' => $method, 'controller' => $class];
    }
    static function Render():void
    {
        self::$dispatcher = \FastRoute\simpleDispatcher(
            function(\FastRoute\RouteCollector $r) {
                foreach(self::$routes as $url => $routeParams)
                {
                    $r->addRoute($routeParams['method'], $url, $routeParams['controller']);
                }
        });

        $httpMethod = $_SERVER['REQUEST_METHOD'];
        $uri        = $_SERVER['REQUEST_URI'];

        // Strip query string (?foo=bar) and decode URI
        if (false !== $pos = strpos($uri, '?')) {
            $uri = substr($uri, 0, $pos);
        }
        $uri = rawurldecode($uri);

        $routeInfo = self::$dispatcher->dispatch($httpMethod, $uri);
        switch ($routeInfo[0]) 
        {
            case \FastRoute\Dispatcher::NOT_FOUND:
                // ... 404 Not Found
                App_Exceptions::RouteErrors(404, 'NotFound', $uri);
                break;
            case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
                App_Exceptions::RouteErrors(405, 'NotAllowed', $uri);
                break;
            case \FastRoute\Dispatcher::FOUND:
                $handler    = $routeInfo[1];
                $vars       = $routeInfo[2];
                
                $handler[0] = new $handler[0];
                
                call_user_func(
                    $handler
                    , $vars
                );
                // ... call $handler with $vars
                break;
        }
    }
}
?>