<?php
namespace Core\Router;


class Router
{
    public function __construct()
    {

        $this->routingReader = new RoutingReader();
        $this->routeCollection = $this->generateRouteCollection();
    }

    protected $routingReader;
    protected $routeCollection = [];

    public function getRouteCollection()
    {
        return $this->routeCollection;
    }

    protected function generateRouteCollection()
    {
        return $this->routingReader->getRouteCollection();
    }

    public function getRoute($route)
    {

    }

    public function getRouteByPattern($pattern)
    {
        foreach($this->routeCollection as $route) {
            if($route->getPattern() == $pattern) return $route;
        }
    }

    public function getUrl()
    {

    }

    public function generateUrl($pattern)
    {

    }
}