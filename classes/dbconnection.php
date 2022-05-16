<?php
class dbconnection{
    //{hostname,username,password}default values
    private $host_name = "localhost";
    private $user_name = "root";
    private $password= "";
    private $database_name= "ecautomationsystem";//---->ur database name





    public function connect() {

        $conn = mysqli_connect($this->host_name,$this->user_name,$this->password,$this->database_name);

        return $conn;
            
        } 
        
        public function checkConncetion(){
            $conn = $this->connect();
            if($conn)
             return true;
            
            else
            return false;
        }
        public function checkQuery($sql){
            if($this->doQuery($sql))
            return true;
            else
            return false;
        }
        public function countRows($sql){
            $count=mysqli_num_rows($this->doQuery($sql));
            return $count;
        }
        public function doQuery($sql){
            $result=$this->connect()->query($sql);
            return $result;
        }
}
?>