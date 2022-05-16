<!DOCTYPE html>
<html>
<head>
  <title>Register now</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
<div id="one">
            <ul>
                <li>Exam Cell Automation.</li>
                <li ><a href="HomePage.php" >Home</a></li>
                <li><a href="index.php" target="_blank">Login</a></li>
                <li><a href="register" target="_blank" class="home"><span>Sign Up</span></a></li>
                <li ><input class="search" type="text" placeholder="Search" name="form"></li>
            </ul>
        </div>
<!--Rgistration -->
<div class="register">
  <fieldset class="f1">  <center>
<div class="reg"><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"><br><br>
  <h4>First Name : </h4>
  <input placeholder="type your First Name" type="text" name="newName" required>
  <h4>Last Name : </h4><input placeholder="type your Last Name" type="text" name="newlast" required >
  <h4>Email Address : </h4><input placeholder="type your Email" type="text" name="newMail" required>
  <h4>Phone Number : </h4><input placeholder="type your Phone Number" type="text" name="newPhone" required>
  <h4>Address : </h4><input placeholder="type your Address" type="text" name="newAdd" required>
  <h4>Level : </h4>
       <select class="level" name="newLevel">
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
       </select>
  <h4>Semester : </h4>
       <select class="sem" name="newSem">
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
         <option>5</option>
         <option>6</option>
        
       </select><br><br>
<h4>Choose Photo :</h4><br> <input  class="f2" type="file" name="image" required>
   <br><br><button class="sb" type="submit" name="submit" >Submit</button>
</form></div></div></fieldset></center>
<?php 
include_once "/xampp/htdocs/se2project/classes/dbconnection.php";

include_once "/xampp/htdocs/se2project/classes/registerButtonUsege.php";
include_once "/xampp/htdocs/se2project/classes/mvc.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
$regisetbutton=new registerButtonUsage(new mvc());
$regisetbutton->doButton();

}
?> 




</body>
</html>



  







