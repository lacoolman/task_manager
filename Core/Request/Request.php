<?php
namespace Core\Request;


class Request
{

    const REDIRECT_URL = 'REDIRECT_URL';

    private static $instance;

    public static function  getRequest()
    {
        if(!isset(self::$instance)) {
            self::$instance = new Request();
        }

        return self::$instance;
    }

    public function __construct()
    {
        $this->params = array_merge($this->params, $_REQUEST, $_GET, $_SERVER);
    }

    protected $params = [];

    public function get($paramName)
    {
        return $this->params[$paramName];
    }
}