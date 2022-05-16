<?php
include_once "/xampp/htdocs/se2project/classes/dbconnection.php";
class searchMarksheet {
    function Search($id){
        $database=new dbconnection();    
        $sql = "SELECT * FROM subject WHERE stid = '$id'";
          $result = $database->doQuery($sql);
          $count=mysqli_num_rows($result);
        if($count==1){
                        header("location:MarksheetDetaill.php?id=$id");
                    }
                    else{
                        echo "<br><p style=color:red;>Invalid Input</p>";
                    }
        
            }
}
?>