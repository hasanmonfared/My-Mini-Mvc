<?php
class View
{
    public function __construct()
    {

    }
    public function render($name, $params = array(),$flag=0)
    {
        if($flag==0){

            $this->header();
        }
        extract($params);
        require "Views/$name.php";
        if ($flag==0) {
            $this->footer();
            
        }
        return;
    }
    public function header()
    {
        require "Views/layout/header.php";
    }
    public function footer()
    {
        require "Views/layout/footer.php";
    }
}
