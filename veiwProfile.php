<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	 <link rel="stylesheet" href="css/Login.css">
  
</head>
<body>

<?php 
$id=($_GET['id']);

?>  
<div id="one">
            <ul>
                <li>Exam Cell Automation.</li>
                <li ><a href="" class="home" ><span>My Profile</span></a></li>
                <li><a href="veiwHallticket.php?id=<?php echo $id ?>" >Hall Ticket</a></li>
                <li><a href="veiwMarksheet.php?id=<?php echo $id ?>">My MarkSheet</a></li>
                <li><a href="logout.php" >Log out</a></li>
            </ul>
        </div>
<div style ="text-decoration: none; color: white" class="registration">
<center><br><br><br><br><br>
  <?php 
  include "/xampp/htdocs/se2project/classes/profile.php";
$profile=new profile();
$profile->ViewProfile($id);
?>
  <br><br><br>
  <a style="text-decoration: none; color: white" href="updateProfile.php?id=<?php echo $id ?>"><button class="lb">update</button></a>
  
  
         
  </center>
</div>

  </body>
  </html>