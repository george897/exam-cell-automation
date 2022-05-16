<?php

include_once "/xampp/htdocs/se2project/classes/dbconnection.php";
class profile {
    function checkId($id){
        $database=new dbconnection();
        $sql = "SELECT * FROM stinfo WHERE id = $id";
        $count=$database->countRows($sql);;
        if($count!=1){
                      return false;
                        
                    }
                    return true;
      
    }
    function printProfileTable($result){
        while($row = mysqli_fetch_array($result))
        { 
            echo "</table>";
            echo "<table border='1'>
            <tr>
            <th style=background-color:hotpink;color:white>Type</th>
            <th style=background-color:hotpink;color:white>Your Information</th>
            </tr>
            
            ";
            echo "<th>Image</th>";
            echo "<td>" . '<img src="reg_pic/' . $row['stimg']  . '" width=" 200px' .  '" height="200px"/>'. "</td>";
            echo "</tr>";
            echo "<tr >";
            echo "<th>Firstname</th>";
            echo "<td>" . $row['stname'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Lastname</th>";
            echo "<td>" . $row['lname'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>EmailAddress</th>";
            echo "<td>" . $row['stemail'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>PhoneNumber</th>";
            echo "<td>" . $row['stphone'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Address</th>";
            echo "<td>" . $row['stadd'] . "</td>";
            echo "<tr>";
            echo "<tr>";
            echo "<th>Level</th>";
            echo "<td>" . $row['level'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Semester</th>";
            echo "<td>" . $row['semester'] . "</td>";
            echo "</tr>";
            echo "<tr>";
            
        }
        echo "</table>"; 
      
    }
    function ViewProfile($id){
        $database=new dbconnection();
        if($this->checkId($id)){
        $sql = "SELECT * FROM register AS r JOIN stinfo as s on r.ssn=s.ssn where id=$id";
        $result = $database->doQuery($sql);
        $this->printProfileTable($result);
        }else{
            echo "<p style=color:red>Invalid Id</p>";
        }
      
      }
}
?>