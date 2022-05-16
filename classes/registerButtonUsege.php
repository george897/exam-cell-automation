<?php
include_once "/xampp/htdocs/se2project/classes/registerButton.php";
class registerButtonUsage{
    private $registerbutton;
    public function __construct(registerButton $register)
    {
        $this->registerbutton=$register;
    }
    public function doButton(){
        $this->registerbutton->usebutton();
    }
}
?>