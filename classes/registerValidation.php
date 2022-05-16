<?php
include_once "/xampp/htdocs/se2project/classes/dbconnection.php";
class registerValidation{
    private function registerationMessage(){
        $message = "Registeration Done successfully! " . "after admin aprroving go to login  ";
        return $message;
    }
    public function signup($student){  
        $database=new dbconnection();
        $sql ="INSERT INTO `register`(stname,stemail,stadd,stphone,stimg,lname,level,semester) 
        VALUES ('".$student->getFirstName()."','".$student->getEmail()."','".$student->getAddress()."','".$student->getPhoneNumber()."','".$student->getImage()."',
        '".$student->getLastName()."',".$student->getLevel().",".$student->getSemster().")";
            if($database->checkQuery($sql))
                echo "<script type='text/javascript'>alert('".$this->registerationMessage()."');</script>"; 
             else 
            echo "<script type='text/javascript'>alert('error');</script>"; 
        
    }
}
?>