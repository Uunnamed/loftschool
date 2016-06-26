<?php

class Route
{
  //Старайся стилизовать код , чтоб он был более читабельнее
    static function start()
    {

        $controller_name = 'Main';
        $action_name     = 'index';
        $routes          = explode('/', $_SERVER['REQUEST_URI']);

        if (!empty($routes[3]))
        {

        $controller_name = $routes[3];

        }

        if(!empty($routes[4]))
        {
         $action_name    = $routes[4];
        }

        $model_name      = 'Model_'.$controller_name;
        $controller_name = 'Controller_'.$controller_name;
        
        $action_name     = 'action_'.$action_name;

        $model_file      = strtolower($model_name).'.php';
        $model_path      = './app/models/'.$model_file;

        if(file_exists($model_path))
        {
            include $model_path;
        }
        $controller_file = strtolower($controller_name).'.php';
        $controller_path = './app/controllers/'.$controller_file;

        if(file_exists($controller_path))
        {
            include $controller_path;
        }else{

            self::ErrorPage404();
        }
        $controller = new $controller_name;
        $action     = $action_name;

        if(method_exists($controller,$action))
        {
            $controller->$action();

        }else{
            self::ErrorPage404();// в контексте можешь обращаться к статическим методам через self
        }
    }

    static function ErrorPage404()
    {

        $host='http://'.$_SERVER['HTTP_HOST'].'/loftschool/dz3_2/';
        header('HTTP/1.1 404 Not Found');
        header('Status: 404 Not Found');
        header('Location:'.$host.'404');
    }
}