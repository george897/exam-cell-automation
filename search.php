<!DOCTYPE html>
<html>
<head>
  <title>Marksheet Form</title>
    <link rel="stylesheet" href="css/Search.css">

</head>
<body>
<div id="one">
            <ul>
                <li>Exam Cell Automation.</li>
                <li ><a href="veiwRegisteration.php" >Registeration</a></li>
                <li><a href="veiwAddStudent.php">Add Student</a></li>
                <li><a href=""class="home" ><span>Add Mark Sheet</span></a></li>
                <li><a href="logout.php" >Log out</a></li>
            </ul>
        </div>



<div class="login">
  <center>
    <fieldset class="f2">

    <div class="log">
       <form action="<?php



 echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"   >
         <div class="txt">
          <h4>Student ID : </h4><input class="ut" type="text" name="id" required>
         
         </div>
         
        <?php
         
        // include "classes/student.php";
        // include "classes/viewMarksheet.php";
        include_once "/xampp/htdocs/se2project/classes/searchMarksheet.php";
        if($_SERVER["REQUEST_METHOD"]=="POST"){
        
        	$id=$_REQUEST['id'];
            $searchMarksheet=new searchMarksheet();
            $searchMarksheet->Search($id);
        }

        ?>


         <br><a href="MarksheetFill.php?id=<?php echo $Student->id ?>"><button class="lb" name="Search">Search</button></a><br><br>

       </form>
    </div>
    </fieldset>
  </center>
</div>