<?php

class Controller
{
    public $model;
    public $view;
    //В классах желательно всегда писать какого типа методы даже если public
    public function __construct()
    {
        $this->view = new View();
    }
    
    public function action_index(){
        
    }
}
