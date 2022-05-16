<?php
include_once "/xampp/htdocs/se2project/classes/student.php";
include_once "/xampp/htdocs/se2project/classes/registerButton.php";
include_once "/xampp/htdocs/se2project/classes/studentsAddition.php";
include_once "/xampp/htdocs/se2project/classes/addStudentButton.php";
include_once "/xampp/htdocs/se2project/classes/registerValidation.php";
include_once "/xampp/htdocs/se2project/classes/User.php";
include_once "/xampp/htdocs/se2project/classes/UserValidation.php";
include_once "/xampp/htdocs/se2project/classes/loginButton.php";
class mvc implements registerButton{
public function usebutton()
{
    $Student = new student();
  $register=new registerValidation();
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
  $register->signup($Student);
}
}
class mvc2 implements addStudentButton{
public function usebutton()
{
  $ssn=$_REQUEST['ssn'];
$addstudent=new studentsAddition();
$addstudent->addstudent($ssn);
}
} 
class mvc3 implements loginButton{
  public function useButton()
  {
    $user = new User();
    $userValdiation= new UserValidation();
    $user->setID($_REQUEST['logUS']);
    $_SESSION['id']=$user->getID();
    $user->setPassword($_REQUEST['logPS']);
    if($userValdiation->login_error($user->getID(),$user->getPassword())){
    }else{
    $userValdiation->login($user->getID(),$user->getPassword());
    }
  }
} 

?>