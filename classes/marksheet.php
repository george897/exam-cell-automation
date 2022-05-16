<?php
include_once "/xampp/htdocs/se2project/classes/dbconnection.php";
class marksheet {
    function checkMarksheetId($id){
        $database=new dbconnection();
        $sql = "SELECT * FROM subject WHERE stid = $id";
        $result = $database->doQuery($sql);
        $count=mysqli_num_rows($result);
        if($count!=1){
                      
                        return false;
                    }
                    return true;
    }
    function printmarksheet($result){
        while($row = mysqli_fetch_array($result))
      
        { 
        
        echo "<form style=margin-top:200px;margin-right:50px><table border='5'>
        <tr >
     
        <tr style=background-color:orangered;color:white>
        <th>Subjects Number </th>
        <th>Subject Name</th>
        <th>Your Grades</th>
        </tr>
    
        ";
        
        echo "<tr style=background-color:black;>";
        echo "<th style=color:orangered;>Subject1: </th>";
        echo "<td>" . $row['subject1'] . "</td>";
        echo "<td>" . $row['grade1'] . "</td>";
        echo "</tr>";
        echo "<tr style=background-color:black;>";
        echo "<th  style=color:orangered;>Subject2: </th>";
        echo "<td>" . $row['subject2'] . "</td>";
        echo "<td>" . $row['grade2'] . "</td>";
        echo "</tr>";
        echo "<tr style=background-color:black;>";
        echo "<th  style=color:orangered;>Subject3: </th>";
        echo "<td>" . $row['subject3'] . "</td>";
        echo "<td>" . $row['grade3'] . "</td>";
        echo "</tr>";
        echo "<tr style=background-color:black;>";
        echo "<th  style=color:orangered;>Subject4: </th>";
        echo "<td>" . $row['subject4'] . "</td>";
        echo "<td>" . $row['grade4'] . "</td>";
        echo "</tr>";
        echo "<tr style=background-color:black;>";
        echo "<th  style=color:orangered;>Subject5: </th>";
        echo "<td>" . $row['subject5'] . "</td>";
        echo "<td>" . $row['grade5'] . "</td>";
        echo "</tr>";
        echo "<tr style=background-color:black;>";
        echo "<th  style=color:orangered;>Subject6: </th>";
        echo "<td>" . $row['subject6'] . "</td>";
        echo "<td>" . $row['grade6'] . "</td>";
        echo "</tr>";
        }
        
        
        echo "</table></form>";
    }
    function ViewMarksheet($id){
        $database=new dbconnection();
     if($this->checkMarksheetId($id)){  
        $sql = "SELECT * FROM subject WHERE stid =$id";
        $result = $database->doQuery($sql);
        $this->printmarksheet($result); 

     }else{
        echo "<p style=color:red>Invalid Id</p>";
     }
      
      }
      
      
}
?>