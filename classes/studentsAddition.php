<?php

use function PHPSTORM_META\sql_injection_subst;
include "student.php";
class studentsAddition extends dbconnection{
    function addSemester1Courses($id,$Semester){
        $sql1="INSERT INTO subject (stid,subject1,subject2,subject3,subject4,subject5,subject6)
        VALUES ('$id','English1','Math1','Physics','CS','Is','Elctronics')";
        $result1 = $this->doQuery($sql1);
        $sql2="INSERT INTO hall_ticket(stid,subject_1,subject_2,subject_3,subject_4,subject_5,subject_6,semester,seatnumber) VALUES($id,'English1','Math1','Cs','Is','Physics','Elctronics',$Semester,".rand(0,4000).")";
        $result2=$this->doQuery($sql2);
    }
    function addSemester2Courses($id,$Semester){
      $sql1="INSERT INTO subject (stid,subject1,subject2,subject3,subject4,subject5,subject6)
      VALUES ('$id','English2','Math2','Pl1','Mangment','Statistics','Economics')";
      $result1 = $this->doQuery($sql1);
      $sql2="INSERT INTO hall_ticket(stid,subject_1,subject_2,subject_3,subject_4,subject_5,subject_6,semester,seatnumber) VALUES($id,'English2','Math2','Pl1','Statistics','Economics','IT',$Semester,".rand(0,4000).")";
      $result2=$this->connect()->query($sql2);
  }
  function addSemester3Courses($id,$Semester){
   $sql1="INSERT INTO subject (stid,subject1,subject2,subject3,subject4,subject5,subject6)
   VALUES ('$id','Ds','Pl2','DataBase','HR','Dc','Logics','OR')";
   $result1 = $this->doQuery($sql1);
   $sql2="INSERT INTO hall_ticket(stid,subject_1,subject_2,subject_3,subject_4,subject_5,subject_6,semester,seatnumber) VALUES($id,'Ds','Pl2','DataBase','Dc','Logics','OR',$Semester,".rand(0,4000).") ";
   $result2=$this->doQuery($sql2);
}
function addSemester4Courses($id,$Semester){
   $sql1="INSERT INTO subject (stid,subject1,subject2,subject3,subject4,subject5,subject6)
   VALUES ('$id','Algorithms','Software1','signals','OS','Discret','Network')";
   $result1 = $this->doQuery($sql1);
   $sql2="INSERT INTO hall_ticket(stid,subject_1,subject_2,subject_3,subject_4,subject_5,subject_6,semester,seatnumber) VALUES($id,'Algorithms','Software1','signals','OS','Discret','Network',$Semester,".rand(0,4000).")";
   $result2=$this->doQuery($sql2);
}
function addSemester5Courses($id,$Semester){
   $sql1="INSERT INTO subject (stid,subject1,subject2,subject3,subject4,subject5,subject6)
   VALUES ('$id','Semulation','Multimedia','Selected1','Mis','Co','Ethics')";
   $result1 = $this->doQuery($sql1);
   $sql2="INSERT INTO hall_ticket(stid,subject_1,subject_2,subject_3,subject_4,subject_5,subject_6,semester,seatnumber) VALUES($id,'Semulation','Multimedia','Selected1','Mis','Co','Ethics',$Semester,".rand(0,4000).")";
   $result2=$this->doQuery($sql2);
}
function addSemester6Courses($id,$Semester){
   $sql1="INSERT INTO subject (stid,subject1,subject2,subject3,subject4,subject5,subject6)
   VALUES ('$id','Selected2','Grahpichs','IA','Mis','Compiler','Se2'))";
   $result1 = $this->doQuery($sql1);
   $sql2="INSERT INTO hall_ticket(stid,subject_1,subject_2,subject_3,subject_4,subject_5,subject_6,semester,seatnumber) VALUES($id,'Selected2','Grahpichs','IA','Mis','Compiler','Se2',$Semester,".rand(0,4000).")";
   $result2=$this->doQuery($sql2);
}
function setStudentPassword($ssn){
   $sql = "INSERT INTO stinfo  (ssn,stpass) VALUES($ssn,'".rand(0,10000)."')" ;
   $result= $this->doQuery($sql);
   return $result;
}
function getStudentPassword($ssn){
   $sql = "SELECT * FROM stinfo WHERE ssn=$ssn" ;
   $result= $this->doQuery($sql);
   $row=mysqli_fetch_assoc($result);
   $password=$row['stpass'];
   return $password;
}
function insertStudentIntoHallTicket($id,$Semester,$seatNumber){
   $sql="INSERT INTO hall_ticket (stid,semester,seatnumber)
      VALUES ('$id','$Semester', '$seatNumber')";
      $result = $this->doQuery($sql);
}
/*function instertStudentId(){
   $sql2="INSERT INTO stinfo (ssn,stpass)
   VALUES (, 'st')";
   $result2 = $this->connect()->query($sql2);
}*/
    function addstudent($ssn){
      $this->setStudentPassword($ssn);
        $sql = "SELECT * FROM register AS r JOIN stinfo as s on r.ssn=s.ssn where s.ssn=$ssn";
      $result = $this->doQuery($sql);
      $student= new student();
      while($row = mysqli_fetch_array($result))
      {
      $student->setFirstName($row['stname']);
      $student->setLastName($row['lname']); 
      $student->setLevel($row['level']);
      $student->setSemster($row['semester']);
      $student->setId($row['id']);
      if ($row['semester']==1) {
        $this->addSemester1Courses($student->getId(),$student->getSemster());
      }
      elseif ($row['semester']==2) {
         $this->addSemester2Courses($student->getId(),$student->getSemster());
      }
      if ($row['semester']==3) {
         $this->addSemester3Courses($student->getId(),$student->getSemster());
      }
      if ($row['semester']==4) {
         $this->addSemester4Courses($student->getId(),$student->getSemster());
      }
      if ($row['semester']==5) {
         $this->addSemester5Courses($student->getId(),$student->getSemster());
      }
      if ($row['semester']==6) {
         $this->addSemester6Courses($student->getId(),$student->getSemster());
      }
      
      }
      header('location: ./veiwAddStudent.php');
      
      }
}
?>