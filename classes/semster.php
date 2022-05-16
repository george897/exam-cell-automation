<?php

include_once "/xampp/htdocs/se2project/classes/courses.php";

 class semster1 implements courses{
public function getcourses()
{
  return "'English1','Math1','Physics','CS','Is','Elctronics'";  
}
}
 class semster2 implements courses{
    public function getcourses()
    {
      return "'English2','Math2','Pl1','Mangment','Statistics','Economics'";  
    }
     }
 class semster3 implements courses{
     public function getcourses()
        {
          return "'Ds','Pl2','DataBase','Dc','Logics','OR'";  
        }
}
 class semster4 implements courses{
        public function getcourses()
            {
              return "'Algorithms','Software1','signals','OS','Discret','Network'";  
            }
  }
 class semster5 implements courses{
     public function getcourses()
             {
             return "'Semulation','Multimedia','Selected1','Mis','Co','Ethics'";  
             }
     }
class semster6 implements courses{
      public function getcourses()
             {
                return "'Selected2','Grahpichs','IA','Mis','Compiler','Se2'";  
             }
                     
         }
?>