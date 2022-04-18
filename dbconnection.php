<?php
 class dbconnection{

    private $host_name = "localhost";
    private $user_name = "root";
    private $password= "";
    private $database_name= "ecautomationsystem";





    protected function connect() {

        $conn = mysqli_connect($this->host_name,$this->user_name,$this->password,$this->database_name);

        return $conn;
            
        } 
        
        protected function checkConncetion($sql){
            $conn = $this->connect();
            if($conn)
             return true;
            
            else
            return false;
        }
        protected function checkQuery($sql){
            $conn = $this->connect();
            $result=mysqli_query($conn,$sql);
            if($result)
            return true;
            else
            return false;
        }
}
?>