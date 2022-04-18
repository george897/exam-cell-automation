<!DOCTYPE html>
<html>
<head>
  <title>Register now</title>
    <link rel="stylesheet" href="css/register.css">

</head>
<body>

  <nav class="navbar">
  <div class="logo"><h1>EXAM CELL AUTOMATION</h1></div>
  <div class="option">
    <ul>
      <li><a href="ho.php">HOME</a></li>
      <li><a>ABOUT</a></li>
      <li><a>CONTACT US</a></li>
    </ul>
  </div>  
</nav>
<!--Rgistration -->
<div class="register">
    <center>
<fieldset class="f1">
    <legend>REGISTER FORM</legend>
<div class="reg"><form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"><br><br>
  <h4>First Name : </h4><input type="text" name="newName" required>
  <h4>Last Name : </h4><input type="text" name="newlast" required>
  <h4>Email Address : </h4><input type="text" name="newMail" required>
  <h4>Phone Number : </h4><input type="text" name="newPhone" required>
  <h4>Address : </h4><input type="text" name="newAdd" required>
  <h4>Level : </h4>
       <select name="newLevel">
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
       </select>
  <h4>Semester : </h4>
       <select name="newSem">
         <option>1</option>
         <option>2</option>
         <option>3</option>
         <option>4</option>
         <option>5</option>
         <option>6</option>
         <option>7</option>
         <option>8</option>
       </select><br><br>
<h4>Choose Photo :</h4><br> <input type="file" name="image" required>
   <br><br><button class="sb" type="submit" name="submit" >Submit</button>
</form></div></div></fieldset></center>

<?php 
include_once "./dbconnection.php";
include_once "classes/student.php";
if($_SERVER["REQUEST_METHOD"]=="POST"){

  $Student = new student();
  
  $Student->setFirstName($_REQUEST['newName']);
  $Student->setLastName($_REQUEST['newlast']);
  $Student->setPhoneNumber($_REQUEST['newPhone']);
  $Student->setEmail($_REQUEST['newMail']);
  $Student->setAddress($_REQUEST['newAdd']);
  $Student->setLevel($_REQUEST['newLevel']);
  $Student->setSemster($_REQUEST['newSem']);

if(isset($_POST['submit'])){
$image=$_FILES['image'];
$filename = $image['name'];
$Student->setImage($filename);
$fileerror = $image['error'];
$filetemp = $image['tmp_name'];
$fileext = explode('.', $filename);
$filecheck = strtolower(end($fileext));
$fileallowed = array('png', 'jpg' , 'jpeg');
if (in_array($filecheck,$fileallowed)) {
    $dest='reg_pic/'.$filename;
    move_uploaded_file($filetemp,$dest); }
 }
$Student->signup();

}?> 




</body>
</html>



  







