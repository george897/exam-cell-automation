<!DOCTYPE html>
<html> 
<head>
  <title>Add Student</title>
  <link rel="stylesheet" href="css/add_student.css">
</head>
<body>

<nav class="navbar">
  <div class="logo"><h1>EXAM CELL AUTOMATION</h1></div>
  <div class="option">
    <ul>
      <li><a href="admin_hp.php">HOME</a></li>
      <li><a href="#about">ABOUT</a></li>
      <li><a>CONTACT US</a></li>
      <li><a href="logout.php">LOG OUT</a></li>
    </ul>
  </div>  
</nav>


<div class="registration">
<center>


<?php
include "classes/StudentInfo.php";
include "classes/studentsAddition.php";
$studentTable=new StudentInfo();
$studentTable->veiwStudentTable();
if(isset($_POST['add'])){
$ssn=$_REQUEST['ssn'];
$addstudent=new studentsAddition();
$addstudent->addstudent($ssn);
}
?>
<form method="POST"> 
 <input type="text" name="ssn" placeholder="Ssn" required >
 <button class="add" type="submit" name="add">add student</a></button>
</form>
</center>
 
 </div>


    </body>
    </html>