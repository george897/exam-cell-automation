<?php
//include_once ("./dbconncection");
class student extends dbconnection{
private $id;    
private $firstName;
private $lastName;
private $email;
private $phoneNumber;
private $address;
private $level;
private $semster;
private $image;


public function setId($id){
    $this->id=$id;
}
public function setFirstName($firstName){
    $this->firstName=$firstName;
}
public function setLastName($lastName){
    $this->lastName=$lastName;
}
public function setEmail($email){
    $this->email=$email;
}
public function setPhoneNumber($phoneNumber){
    $this->phoneNumber=$phoneNumber;
}
public function setAddress($address){
    $this->address=$address;
}
public function setLevel($level){
    $this->level=$level;
}
public function setSemster($semster){
    $this->semster=$semster;
}
public function setImage($image){
    $this->image=$image;
}
public function getId(){
    return $this->id;
}
public function getFirstName(){
    return $this->firstName;
}
public function getLastName(){
    return $this->lastName;
 }
public function getEmail(){
    return $this->email;
}
public function getPhoneNumber(){
    return $this->phoneNumber;
}
public function getAddress(){
    return $this->address;
}
public function getLevel(){
    return $this->level;;
}
public function getSemster(){
    return $this->semster;;
}
public function getImage(){
    return $this->image;;
}
private function registerationMessage(){
    $message = "Registeration Done successfully! " . "after admin aprroving Kindly Check your Mail for your id and password and hallticket link ";
    return $message;
}
public function signup(){  
    $sql ="INSERT INTO `register`(stname,stemail,stadd,stphone,stimg,lname,level,semester) 
    VALUES ('".$this->getFirstName()."','".$this->getEmail()."','".$this->getAddress()."','".$this->getPhoneNumber()."','".$this->getImage()."','".$this->getLastName()."'
    ,".$this->getLevel().",".$this->getSemster().")";
    if ($this->checkConncetion($sql)) {
        if($this->checkQuery($sql))
            echo "<script type='text/javascript'>alert('".$this->registerationMessage()."');</script>"; 
    } else {
        echo "Error";
    }
    }
}
?>