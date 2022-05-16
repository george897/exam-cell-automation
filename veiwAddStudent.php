<!DOCTYPE html>
<html> 
<head>
  <title>Add Student</title>
  <link rel="stylesheet" href="css/adStudent.css">
</head>
<body>
<div id="one">
            <ul>
                <li>Exam Cell Automation.</li>
                <li ><a href= "veiwRegisteration.php" >Registeration</a></li>
                <li><a href="" class="home"><span>Add Student</span></a></li>
                <li><a href="search.php"  >Add Mark Sheet</a></li>
                <li><a href= "logout.php" >Log out</a></li>
            </ul>
        </div>


<div class="registration">
<center>


<?php
include_once "/xampp/htdocs/se2project/classes/StudentInfo.php";
include_once "/xampp/htdocs/se2project/classes/addStudentButtonUsage.php";
include_once "/xampp/htdocs/se2project/classes/mvc.php";
$studentTable=new StudentInfo();
$studentTable->veiwStudentTable();
if(isset($_POST['add'])){
$addbutton=new addStudentButtonUsage(new mvc2());
$addbutton->doButton();
}
?>
<form method="POST"> 
 <input class="ssn" type="text" name="ssn" placeholder="Ssn" required >
 <button class="add" type="submit" name="add">add student</a></button>
</form>
</center>
 
 </div>


    </body>
    </html>