<!DOCTYPE html>
<html>
<head>
	<title>View Registeration</title>
	 <link rel="stylesheet" href="css/vRegisteration.css">
</head>
<body>
<div id="one">
            <ul>
                <li>Exam Cell Automation.</li>
                <li ><a href="" class="home" ><span>Registeration</span></a></li>
                <li><a href="veiwAddStudent.php" >Add Student</a></li>
                <li><a href="search.php"  >Add Mark Sheet</a></li>
                <li><a href= "logout.php" >Log out</a></li>
            </ul>
        </div>
<div class="registration">
<center>
<?php 
include 'classes/Registerations.php';

$register= new Registeration();
$register->viewRegistration();


 ?>
</center></div>
</body>
</html>