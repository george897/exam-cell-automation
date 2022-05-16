<?php

include_once "/xampp/htdocs/se2project/classes/dbconnection.php";
class hallticket {
    function checkHallticketId($id){
      $database=new dbconnection();
        $sql = "SELECT * FROM hall_ticket WHERE stid = $id";
        $result = $database->doQuery($sql);
        $count=$database->countRows($sql);
        if($count!=1){
                       
                        return false;
                    }
                    return true;
    }
    function printHallticketTable($result){
      while($row = mysqli_fetch_array($result))
      { 
      echo "<center><form style=margin-top:100px;width:300px;margin-right:50px;><table style=background-color:green;color:white border='5';>
      <tr style=background-color:green;color:white>
      <th>Your </th>
      <th>HallTicket</th>
      <th>Time</th>
      </tr>
      <tr style=background-color:#01f80180;color:white>
      
      <th>type</th>
      <th>Your Information</th>
      
      
      </tr>
      
      ";
      echo "<tr style=background-color:green;color:white>";
      echo "<th>Firstname: </th>";
      echo "<td>" . $row['stname'] . "</td>";
      echo "</tr>";
      echo "<tr style=background-color:#01f80180;color:white>";
      echo "<th>Lastname: </th>";
      echo "<td>" . $row['lname'] . "</td>";
      echo "</tr>";
      echo "<tr style=background-color:green;color:white>";
      echo "<th>Level: </th>";
      echo "<td>" . $row['level'] . "</td>";
      echo "</tr>";
      echo "<tr style=background-color:#01f80180;color:white>";
      echo "<th>Semester: </th>";
      echo "<td>" . $row['semester'] . "</td>";
      echo "</tr>";
      echo "<tr style=background-color:green;color:white>";
      echo "<th>SeatNumber: </th>";
      echo "<td>" . $row['seatnumber'] . "</td>";
      echo "</tr>";
      echo "<tr style=background-color:#01f80180;color:white>";
      echo "<th>subject1: </th>";
      echo "<td>" . $row['subject_1'] . "</td>";
      echo "<td>9:00-10:00</td>";
      echo "</tr>";
      echo "<tr style=background-color:green;color:white>";
      echo "<th>subject2: </th>";
      echo "<td>" . $row['subject_2'] . "</td>";
      echo "<td>9:00-10:00</td>";
      echo "</tr>";
      echo "<tr style=background-color:#01f80180;color:white>";
      echo "<th>subject3: </th>";
      echo "<td>" . $row['subject_3'] . "</td>";
      echo "<td>9:00-10:00</td>";
      echo "</tr>";
      echo "<tr style=background-color:green;color:white>";
      echo "<th>subject4: </th>";
      echo "<td>" . $row['subject_4'] . "</td>";
      echo "<td>9:00-10:00</td>";
      echo "</tr>";
      echo "<tr style=background-color:#01f80180;color:white>";
      echo "<th>subject5: </th>";
      echo "<td>" . $row['subject_5'] . "</td>";
      echo "<td>9:00-10:00</td>";
      echo "</tr>";
      echo "<tr style=background-color:green;color:white>";
      echo "<th>subject6: </th>";
      echo "<td>" . $row['subject_6'] . "</td>";
      echo "<td>9:00-10:00</td>";
      echo "</tr>";
      }
      echo "</table></form></center>";
        }
    
    function ViewHallTicket($id){
      $database=new dbconnection();
      if($this->checkHallticketId($id)){
        $sql = "SELECT * FROM register AS r JOIN stinfo AS s on r.ssn=s.ssn JOIN hall_ticket AS h on s.id=h.stid where id =$id ";
        $result = $database->doQuery($sql);
        $this->printHallticketTable($result);
      }else{
        echo "<p style=color:red>Invalid Id</p>";
      }
}
}
?>