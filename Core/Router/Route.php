<?php
namespace Core\Router;

class Route
{
    protected $pattern;
    protected $controller;
    protected $action;
    protected $name;
    protected $params = [];

    public function setAction($action) {
        $this->action = $action;
    }

    public function getAction() {
        return $this->action;
    }

    public function setController($controller) {
        $this->controller = $controller;
    }

    public function getController() {
        return $this->controller;
    }

    public function setParams($params) {
        $this->params = $params;
    }

    public function getParams() {
        return $this->params;
    }

    public function setPattern($pattern) {
        $this->pattern = $pattern;
    }

    public function getPattern() {
        return $this->pattern;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}