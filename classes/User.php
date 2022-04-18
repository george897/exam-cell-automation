<?php
//include_once "./dbconncetion.php";
class User extends dbconnection{
private $ssn;
private $id;
private $password;

/*function createConnection(){

    $database=new dbconnection();
    return $database;
}
*/
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
function checkAdmin(){
    if($this->id=="admin"&&$this->password=="admin")
    return true;
    else
    return false;
}
function countRows($result){
    $count=mysqli_num_rows($result);
    return $count;
}

/*function fetechRow($row){
    $result = mysqli_fetch_assoc($row);
    return $result;
}
*/
function login(){
    if($this->checkAdmin())
    header('location:adminHomePage.php');
    else{
        $sql = "SELECT * FROM stinfo WHERE id=".$this->getID()." AND stpass=".$this->getPassword()."";
        $conn=$this->connect();
        $result=mysqli_query($conn,$sql);
        if( $count=mysqli_num_rows($result)>0){
        $row= mysqli_fetch_assoc($result);
        if($row['id']==$this->id&&$row['stpass']==$this->password){
                     header("location:studentHomePage.php?id=".$this->id."");
                 }
    
         }
        }
        
    }
    function checkConnect(){
        if($this->connect())
        return true;
        else
        return false;
    }
}

?>