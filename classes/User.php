<?php

class User {
private $ssn;
private $id;
private $password;


function setID($id){
$this->id=$id;
}
function setPassword($password){
    $this->password=$password;
}
function setSsn($ssn){
    $this->ssn=$ssn;
}
function getID(){
    return $this->id;
}
function getSsn(){
    return $this->ssn;
}
function getPassword(){
return $this->password;
}

}

?>