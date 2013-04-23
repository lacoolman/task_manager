<?php
namespace Core\Router;

class RoutingReader
{

    public function __construct()
    {
        $this->parseRouting();
    }

    protected $routes = [];

    public function parseRouting()
    {
        $content = file_get_contents("Config/Routing/Routing.pr");

        $routes = json_decode($content, true);

        foreach($routes as $name => $route) {
                $newRoute = new Route();
                $newRoute->setName($name);
                $newRoute->setAction($route['action']);
                $newRoute->setController($route['controller']);
                $newRoute->setPattern($route['pattern']);

                $this->routes[$name] = $newRoute;
        }
    }

    public function getRouteCollection()
    {
       return $this->routes;
    }
}