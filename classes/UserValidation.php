<?php
include_once "/xampp/htdocs/se2project/classes/dbconnection.php";
include_once "/xampp/htdocs/se2project/classes/User.php";
class UserValidation {

    function checkAdmin($id,$password){
        if($id=="admin"&&$password=="admin")
        return true;
        else
        return false;
    }
    function login($id,$password){
        $database=new dbconnection();
        if($this->checkAdmin($id,$password))
        header('location:veiwRegisteration.php');
        else{
            $sql = "SELECT * FROM stinfo WHERE id=".$id." AND stpass=".$password."";
            $conn=$database->connect();
            $result=mysqli_query($conn,$sql);
            if( $count=mysqli_num_rows($result)>0){
            $row= mysqli_fetch_assoc($result);
            if($row['id']==$id&&$row['stpass']==$password){
                         header("location:veiwProfile.php?id=".$id."");
                     }
        
             }
            }
            
        }
       
        function logout(){
            session_destroy();
            header("location: index.php");
       }
       function checkLoginError($row){
       
        if ($row['stpass'] != '$password' && $row['id'] == '$id') {
                         echo "Invalid Password";    
                         return true;
                    }else{
                         echo "Invalid Username or Password";
                         return true;
                    }
                    return false; 
       }
       function login_error($id,$password){
        $database=new dbconnection();
        $sql = "SELECT * FROM stinfo WHERE id=".$id." and stpass=".$password."";
        $result = $database->doQuery($sql);
        $row = mysqli_fetch_assoc($result);
         $this->checkLoginError($row);
        
        }
}
?>