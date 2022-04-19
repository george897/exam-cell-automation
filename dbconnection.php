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
        
        protected function checkConncetion(){
            $conn = $this->connect();
            if($conn)
             return true;
            
            else
            return false;
        }
        protected function checkQuery($sql){
            if($this->doQuery($sql))
            return true;
            else
            return false;
        }
        protected function countRows($sql){
            $count=mysqli_num_rows($this->doQuery($sql));
            return $count;
        }
        protected function doQuery($sql){
            $result=$this->connect()->query($sql);
            return $result;
        }
}
?>