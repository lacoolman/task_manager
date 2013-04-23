<?php
namespace Core;

use Core\Request\Request;
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
    }

    public function 

    public static function getRequest()
    {
        return Request::getRequest();
    }
}