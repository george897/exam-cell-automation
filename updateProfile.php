<!DOCTYPE html>
<html>
<head>
	<title>Update Profile</title>
	 <link rel="stylesheet" href="css/MarkFill.css">
</head>
<body>

<div id="one">
            <ul>
                <li>Exam Cell Automation.</li>
                <li ><a href="" class="home" ><span>My Profile</span></a></li>
                <li><a href="veiwHallticket.php?id=<?php echo $id ?>" >Hall Ticket</a></li>
                <li><a href="veiwMarksheet.php?id=<?php echo $id ?>" >My MarkSheet</a></li>
                <li><a href="logout.php" >Log out</a></li>
            </ul>
        </div>

<?php

          

             $id=$_GET['id'];
             include "/xampp/htdocs/se2project/classes/profileEditor.php";
             $profileEditor=new profileEditor();
               $profileEditor->profileEdit($id);
	                
               
               


?>
</center>
</div>
</body>
</html>