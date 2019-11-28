<?php
class User extends Controller
{
public $mymodel;
    public function __construct($model)
    {
        parent::__construct();
        $this->mymodel=$model;
    }
    public function login()
    {
       
        $this->viewObject->render('user/login');

    }
}
