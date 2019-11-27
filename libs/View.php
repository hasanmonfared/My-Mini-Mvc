<?php
class View
{
    public function __construct()
    {

    }
    public function render($name, $param = array())
    {

        extract($param);
        require "Views/layout/header.php";
        require "Views//$name.php";
        require "Views/layout/footer.php";
        return;
    }
}
