<?php
namespace Core;

use Core\Request\Request;
use Core\Router\Route;
use Core\Router\Router;

class Core
{
    public function __construct()
    {
        $this->router = new Router();
    }

    protected $router;

    public function listen()
    {
        $route = $this->router->getRouteByPattern(self::getRequest()->get(Request::REDIRECT_URL));

        $this->proceed($route);
    }

    public function proceed(Route $route)
    {
        $controller = $route->getController() . 'Controller';
        $action = $route->getAction() . 'Action';

        $controller->$action();
    }

    public static function getRequest()
    {
        return Request::getRequest();
    }
}