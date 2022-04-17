<?php
 class dbconnection{

    private $host_name = "localhost";
    private $user_name = "root";
    private $password= "";
    private $database_name= "exam_cell";





    protected function connect() {

        $conn = mysqli_connect($this->host_name,$this->user_name,$this->password,$this->database_name);

        return $conn;
            
        } 

}
?>