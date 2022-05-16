<?php
include_once "/xampp/htdocs/se2project/classes/dbconnection.php";

class StudentInfo {
function createStudentInfoTable(){
    echo "<table border='1'>
    <tr style=background-color:hotpink;color:white>
    <th>Ssn</th>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>EmailAddress</th>
    <th>PhoneNumber</th>
    <th>Address</th>
    <th>Level</th>
    <th>Semester</th>
    <th>Image</th>
    <th style=width:50px;>ID</th>
    <th>Password</th>
    </tr>";
}
function fillStudentInfoTable($sql){
    $database=new dbconnection();
    $result=$database->doQuery($sql);
    while($row = mysqli_fetch_assoc($result))
    {
    echo "<tr>";
    echo "<td><center>" . $row['ssn'] . "</center></td>";
    echo "<td><center>" . $row['stname'] . "</center></td>";
    echo "<td><center>" . $row['lname'] . "</center></td>";
    echo "<td><center>" . $row['stemail'] . "</center></td>";
    echo "<td><center>" . $row['stphone'] . "</center></td>";
    echo "<td><center>" . $row['stadd'] . "</center></td>";
    echo "<td><center>" . $row['level'] . "</center></td>";
    echo "<td><center>" . $row['semester'] . "</center></td>";
    echo "<td>" . '<img src="reg_pic/' . $row['stimg']  . '" width=" 100px' .  '" height="100px"/>'. "</td>";
    echo "<td><center>" . $row['id'] . "</center></td>";
    echo "<td><center>" . $row['stpass'] . "</center></td>";
    echo "</tr>";
    
    }
    echo "</table>";
    }

function veiwStudentTable(){
$sql = "SELECT * FROM register as r join stinfo as s on r.ssn= s.ssn";

$this->createStudentInfoTable();
$this->fillStudentInfoTable($sql);
}
}
?>