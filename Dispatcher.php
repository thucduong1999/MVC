<?php

namespace CONFIGS;

use CONFIGS\Request;

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        
        Router::parse($this->request->url, $this->request);
        
        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $name = ucfirst($this->request->controller . "Controller") ;
        $class = new \ReflectionClass('MVC\Controllers\\'.$name);
        $controller = $class->newInstanceArgs();
        
        return $controller;
    }

}
?>