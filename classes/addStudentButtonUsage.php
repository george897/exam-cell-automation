<?php
include_once "/xampp/htdocs/se2project/classes/addStudentButton.php";
class addStudentButtonUsage{
    private $Button;
 public function __construct(addStudentButton $button){
    $this->Button=$button;
 }
 public function doButton(){
     $this->Button->usebutton();
 }
}
?>