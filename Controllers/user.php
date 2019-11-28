<?php
class User extends Controller
{
public $mymodel;
    public function __construct($model)
    {
        parent::__construct();
        $this->mymodel=$model;
    }
    // show form login
    public function login()
    {
       
        $this->viewObject->render('user/login');

    }
    // checkPOSt data
    public function checklogin()
    {
        $email=$_POST['email'];
        $pass=$_POST['password'];
        if(isset($pass,$email)){
            Session::init();setSession();
            // Session::
        }
        $fetch = $this->mymodel->select('users', "*", "email = '$email' AND password = '$pass'");
        if ($fetch){
            Session::init();
            Session::setSession('Login', $email);
            header('Location: '.URL."/home/index/");
        }else{
            header('Location: '.URL."/user/login/");
        }

        return;
    }
    
}
