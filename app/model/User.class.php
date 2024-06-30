<?php
class User 
{
    public $name;
    public $id;
    public $password;
    public function __construct($name,  $password, $id)
    {
        $this->name  = $name;
        $this->password = $password;
        $this->id = $id;
       
    }
}
?>
