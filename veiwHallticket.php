<!DOCTYPE html>
<html>
<head>
	<title>View Hall Ticket</title>
	 <link rel="stylesheet" href="css/Login.css">
  
</head>
<body>
<?php
$id=$_GET['id'];
?>
<div id="one">
            <ul>
                <li>Exam Cell Automation.</li>
                <li ><a href="veiwProfile.php?id=<?php echo $id ?>"  >My Profile</a></li>
                <li><a href="" class="home"><span>Hall Ticket</span></a></li>
                <li><a href="veiwMarksheet.php?id=<?php echo $id ?>" >My MarkSheet</a></li>
                <li><a href="logout.php" >Log out</a></li>
            </ul>
        </div>
<div class="login">

  <center>
    
   <?php 
   include "/xampp/htdocs/se2project/classes/hallticket.php";
$hallticket=new hallticket();
$hallticket->ViewHallTicket($id);
?>
         
  </center>


  </body>
  </html>

