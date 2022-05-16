<?php
include_once "/xampp/htdocs/se2project/classes/dbconnection.php";
include_once "/xampp/htdocs/se2project/classes/student.php";
include_once "/xampp/htdocs/se2project/classes/profile.php";
class profileEditor extends profile{
function printProfileTable($row){
  echo "<center><tr><form  method=post style=margin-left:100px;margin-top:30px;color:hotpink;>";
    echo "<th><h4><h1>Your ID : </th>";
    echo "<td>" . $row['id'] . "</h1></td><h4><br><br>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Image : </th><br>";
    echo"<td><br>" . '<img src="reg_pic/' . $row['stimg']  . '" width=" 100px' .  '" height="100px"/>'. "</td><br><br>";
    echo "<tr>";
    echo "<th>Firstname : </th>";
    echo "<td><input type=text name=firstName value='" . $row['stname'] . "'></td><br><br>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Lastname : </th>";
    echo "<td><input type=text name=lastName value='" . $row['lname'] . "'></td><br><br>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>EmailAddress : </th>";
    echo "<td><input type=text name=email value='" . $row['stemail'] . "'></td><br><br>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>PhoneNumber : </th>";
    echo "<td><input type=text name=phoneNumber value='" . $row['stphone'] . "'></td><br><br>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Address : </th>";
    echo "<td><input type=text name=address value='" . $row['stadd'] . "'></td><br><br>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Level : </th>";
    echo "<td><input type=text name=level value='" . $row['level'] . "'></td><br><br>";
    echo "</tr>";
    echo "<tr>";
    echo "<th>Semester : </th>";
    echo "<td><input type=text name=semester value='" . $row['semester'] . "'></td><br><br>";
    echo "</tr>";
    echo "<br><br><td><input type=file name=image value='".'<img src="reg_pic/' . $row['stimg']  . '" width=" 100px' .  '" height="100px"/>'.  "'></td></tr>";
  
}  
function updateStudentinformation($row){
  $Student=new student();
  $database=new dbconnection();
    if (isset($_POST['Edit'])) {
        $id=$row['id'];
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $email=$_POST['email'];
        $phoneNumber=$_POST['phoneNumber'];
        $address=$_POST['address'];
        $level=$_POST['level'];
        $semester=$_POST['semester'];
        $image=$_POST['image'];
       
       
      
      
        $sql = "UPDATE register AS r JOIN stinfo as s on r.ssn=s.ssn SET stname ='$firstName'  , lname = '$lastName', stemail='$email', 
        stphone='$phoneNumber', stadd='$address' , level='$level' , semester='$semester',
        stimg='$image' WHERE  id = $id ";   
        $result = $database->doQuery($sql);
        
        if($result){
          echo" <script>alert('Your Update Is Done Please Refresh this page to see your updates')</script> ";
        }
        else 
          echo "Not Updated!";
       }
      
}  
function profileEdit($id){
  $database=new dbconnection();
    $sql = "SELECT * FROM register as r JOIN stinfo as s on r.ssn=s.ssn where id = $id";
    $result = $database->doQuery($sql);
   
    while($row = mysqli_fetch_array($result))
  {
    $this->printProfileTable($row);
    $this->updateStudentinformation($row);
  
    echo "<br><br><td><button name=Edit style=margin-left:0px;height:40px;width:100px;border-radius:20px;color:white;background-color:#81bae080; ><a>Update</a></button><td>";
     echo "</form></tr>";
  
    // $FN,$LN,$EA,$PN,$Ad,$Lvl,$Sem,$im
    
   echo "</table></center>";
    
  }
  
  
  }
}
?>