<?php
class User_model extends Model
{
    private $flagConnection=null;   
    public function __construct()
    {
        $this->flagConnection= parent::__construct();
    } 
}
