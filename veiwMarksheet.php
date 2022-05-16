<!DOCTYPE html>
<html>
<head>
	<title>View Marksheet</title>
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
                <li><a href="veiwHallticket.php?id=<?php echo $id ?>" >Hall Ticket</a></li>
                <li><a class="home"  ><span>My MarkSheet</span></a></li>
                <li><a href="logout.php" >Log out</a></li>
            </ul>
        </div>
<div style ="text-decoration: none; color: white">
  <center>
    
  <?php
       
include "/xampp/htdocs/se2project/classes/marksheet.php";
$id=$_GET['id'];
$marksheet=new marksheet();
$marksheet->ViewMarksheet($id);
	                ?>
  </center>

</div>
  </body>
  </html>