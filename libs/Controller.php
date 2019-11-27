<?php
class Controller
{

    public $viewObject = null;
    public $ModelObject;
    public function __construct()
    {

        $this->viewObject = new View();

    }

}
