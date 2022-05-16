<?php
include_once "/xampp/htdocs/se2project/classes/loginButton.php";
class loginButtonUsage{
    private $Button;
    public function __construct(loginButton $button){
       $this->Button=$button;
    }
    public function doButton(){
        $this->Button->usebutton();
    }

}
?>