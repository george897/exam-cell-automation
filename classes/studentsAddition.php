<?php




include_once "/xampp/htdocs/se2project/classes/dbconnection.php";
include_once "/xampp/htdocs/se2project/classes/student.php";
include_once "/xampp/htdocs/se2project/classes/semster.php";
include_once "/xampp/htdocs/se2project/classes/courseusage.php";


class studentsAddition {
  
    function addSemesterCourses($id,$Semester,$courses){
       $database=new dbconnection();
        $sql1="INSERT INTO subject (stid,subject1,subject2,subject3,subject4,subject5,subject6)
        VALUES ('$id',".$courses.")";
        $result1 = $database->doQuery($sql1);
        $sql2="INSERT INTO hall_ticket(stid,subject_1,subject_2,subject_3,subject_4,subject_5,subject_6,semester,seatnumber)
         VALUES($id,".$courses.",$Semester,".rand(0,4000).")";
        $result2=$database->doQuery($sql2);
    }
function setStudentPassword($ssn){
   $database=new dbconnection();
   $sql = "INSERT INTO stinfo  (ssn,stpass) VALUES($ssn,'".rand(0,10000)."')" ;
   $result= $database->doQuery($sql);
   return $result;
}
function getStudentPassword($ssn){
   $database=new dbconnection();
   $sql = "SELECT * FROM stinfo WHERE ssn=$ssn" ;
   $result= $database->doQuery($sql);
   $row=mysqli_fetch_assoc($result);
   $password=$row['stpass'];
   return $password;
}
function insertStudentIntoHallTicket($id,$Semester,$seatNumber){
   $database=new dbconnection();
   $sql="INSERT INTO hall_ticket (stid,semester,seatnumber)
      VALUES ('$id','$Semester', '$seatNumber')";
      $result = $database->doQuery($sql);
}

    function addstudent($ssn){
      $database=new dbconnection();
      $this->setStudentPassword($ssn);
        $sql = "SELECT * FROM register AS r JOIN stinfo as s on r.ssn=s.ssn where s.ssn=$ssn";
      $result = $database->doQuery($sql);
      $student= new student();
      while($row = mysqli_fetch_array($result))
      {
      $student->setFirstName($row['stname']);
      $student->setLastName($row['lname']); 
      $student->setLevel($row['level']);
      $student->setSemster($row['semester']);
      $student->setId($row['id']);
      if ($row['semester']==1) {
         $courses=new courseusage(new semster1());
        $this->addSemesterCourses($student->getId(),$student->getSemster(),$courses->getCourses());
      }
      elseif ($row['semester']==2) {
         $courses=new courseusage(new semster2());
         $this->addSemesterCourses($student->getId(),$student->getSemster(),$courses->getCourses());
      }
      if ($row['semester']==3) {
         $courses=new courseusage(new semster3());
         $this->addSemesterCourses($student->getId(),$student->getSemster(),$courses->getCourses());
      }
      if ($row['semester']==4) {
         $courses=new courseusage(new semster4());
         $this->addSemesterCourses($student->getId(),$student->getSemster(),$courses->getCourses());
      }
      if ($row['semester']==5) {
         $courses= $courses=new courseusage(new semster5());
         $this->addSemesterCourses($student->getId(),$student->getSemster(),$courses->getCourses());
      }
      if ($row['semester']==6) {
         $courses= $courses=new courseusage(new semster6());
         $this->addSemesterCourses($student->getId(),$student->getSemster(),$courses->getCourses());
      }
      
      }
      header('location: ./veiwAddStudent.php');
      
      }
}
?>