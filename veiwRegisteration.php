<!DOCTYPE html>
<html>
<head>
	<title>View Registeration</title>
	 <link rel="stylesheet" href="css/login.css">
</head>
<body>
<nav class="navbar">
  <div class="logo"><h1>EXAM CELL AUTOMATION</h1></div>
  <div class="option">
    <ul>
      <li><a href="admin_hp.php">HOME</a></li>
      <li><a>ABOUT</a></li>
      <li><a>CONTACT US</a></li>
      <li><a href="logout.php">LOG OUT</a></li>
    </ul>
  </div>  
</nav>
<center>
<?php 
include 'classes/Registerations.php';

$register= new Registeration();
$register->viewRegistration();


 ?>
</center>
</body>
</html>