<!DOCTYPE html>
<html>
<head>
  <title>Marksheet Form</title>
    <link rel="stylesheet" href="css/Markfill.css">

</head>
<body>
<div id="one">
            <ul>
                <li>Exam Cell Automation.</li>
                <li ><a href="veiwRegisteration.php"  >Registeration</a></li>
                <li><a href="veiwAddStudent.php" >Add Student</a></li>
                <li><a href=""class="home" ><span>Add Mark Sheet</span></a></li>
                <li><a href="logout.php" >Log out</a></li>
            </ul>
        </div>





    <center>
<?php



              include_once "classes/insertMarksheet.php";
              $id=$_GET['id'];
               $MarksheetDetaill=new insertMarksheet();
               $MarksheetDetaill->viewMarksheet($id);
        ?>          
             
</center>
 





</body>
</html>



  







