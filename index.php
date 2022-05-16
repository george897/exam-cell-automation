<!DOCTYPE html>
<html> 
<head>
  <title>Login</title>
  <link rel="stylesheet" href="css/Login.css">
</head>
<body>
<div id="one">
            <ul>
                <li>Exam Cell Automation.</li>
                <li ><a href="HomePage.php" >Home</a></li>
                <li><a href=""  class="home"><span>Login</span></a></li>
                <li><a href="register.php"  >Sign Up</a></li>
                <li ><input class="search" type="text" placeholder="Search" name="form"></li>
            </ul>
        </div>
<div class="login">
  <center>
    <fieldset class="f2">
    <div class="log">
       <form action="<?php
 echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"   >
         <div class="txt">
          <h4>User Name : </h4><input placeholder="type your User Name" class="ut" type="text" name="logUS" required>
          <h4>Password : </h4><input placeholder="type your User Password"  class="pt" type="Password" name="logPS" required>
         </div>
         <?php
         
         session_start();
   
   include_once "/xampp/htdocs/se2project/classes/mvc.php";
   include_once "/xampp/htdocs/se2project/classes/loginButtonUsage.php";
   if($_SERVER["REQUEST_METHOD"]=="POST"){
   if (isset($_POST['login'])) {
$login=new loginButtonUsage(new mvc3());
$login->doButton();

         ?><p style="color: red"><?php /*$person->login_error($person->username ,$person->password) */?></p><?php 
        } }?>
         <br><button class="lb" name="login">Login</button><br><br>
         <p>Not Registerd? <a class="su"href="register.php"><ins>Sign Up</ins></a></p>
       </form>
    </div>
    </fieldset>
  </center>
</div>

    </body>
    </html>