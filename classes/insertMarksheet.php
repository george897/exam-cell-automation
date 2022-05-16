<?php
include_once "/xampp/htdocs/se2project/classes/dbconnection.php";
include_once "/xampp/htdocs/se2project/classes/marksheet.php";
class insertMarksheet extends marksheet{
    function printMarksheet($id){
        $database=new dbconnection();
        $sql = "SELECT * FROM subject WHERE stid =$id ";
        $result = $database->doQuery($sql);
        while($row = mysqli_fetch_assoc($result))
        {
        echo "<center><tr><form  method=post style=margin-left:0px;margin-top:60px;color:hotpink;>";
        echo "<th><h4><h1>Student ID : </th>";
        echo "<td>" . $row['stid'] . "</h1></td><h4><br><br>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Subject 1 : </th>";
        echo "<td >" . $row['subject1'] . "</td><br><br>";
        echo "<td><input type=text name=sub1GD  ></td><br><br>";
        echo "</tr>";
        echo "<tr>";
        echo "<th>Subject 2 : </th>";
        echo "<td>" . $row['subject2'] . "</td><br><br>";
        echo "<td><input type=text name=sub2GD ></td><br><br>";
        echo "</tr>";
        echo "<tr>";
           echo "<th>Subject 3 : </th>";
        echo "<td>" . $row['subject3'] . "</td><br><br>";
        echo "<td><input type=text name=sub3GD ></td><br><br>";   echo "</tr>";
        echo "<tr>";
          echo "<th>Subject 4 : </th>";
        echo "<td>" . $row['subject4'] . "</td><br><br>";
        echo "<td><input type=text name=sub4GD ></td><br><br>";   echo "</tr>";
        echo "<tr>";
           echo "<th>Subject 5 : </th>";
        echo "<td>" . $row['subject5'] . "</td><br><br>";
        echo "<td><input type=text name=sub5GD ></td><br><br>";   echo "</tr>";
        echo "<tr>";
        echo "<th>Subject 6 : </th>";
        echo "<td>" . $row['subject6'] . "</td><br><br>";
        echo "<td><input type=text name=sub6GD ></td><br><br>";   echo "</tr>";
        echo "<tr>";
        }
}
function fillMarksheet($id){
    $database=new dbconnection();
    if (isset($_POST['Add'])) {
        $grade1=$_REQUEST['sub1GD'];
        $grade2=$_REQUEST['sub2GD'];
        $grade3=$_REQUEST['sub3GD'];
        $grade4=$_REQUEST['sub4GD'];
        $grade5=$_REQUEST['sub5GD'];
        $grade6=$_REQUEST['sub6GD'];
       $sql = "UPDATE subject SET  grade1='$grade1' ,  grade2='$grade2' ,  grade3='$grade3' ,  grade4='$grade4' , grade5='$grade5' , grade6='$grade6' WHERE stid=$id ";
       $conn = $database->doQuery($sql);
      if ($conn == TRUE) {
          ?><script>alert("Your Student MarkSheet Added Succsessfuly")</script> <?php
      } else 
            echo "Error: " . $sql . "<br>" . $conn;
      }
    }

    function viewMarksheet($id){
     $this->printMarksheet($id);
    $this->fillMarksheet($id);
    echo "<td><button name=Add style=margin-left:0px;height:40px;width:100px;border-radius:20px;color:white;background-color:#81bae080; ><a>Submit</a></button><td>";
      echo "</form></tr>";
}
}
?>