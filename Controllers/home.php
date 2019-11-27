<?php
class Home extends Controller
{
public $mymodel;
    public function __construct($model)
    {
        parent::__construct();
        $this->mymodel=$model;
    }
    public function index()
    {
       
        $this->viewObject->render('home');

    }
}
