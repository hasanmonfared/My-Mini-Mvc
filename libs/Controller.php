<?php
class Controller
{

    public $viewObject = null;
    public function __construct()
    {

        $this->viewObject = new View();

    }

}
