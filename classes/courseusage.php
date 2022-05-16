<?php
include_once "/xampp/htdocs/se2project/classes/courses.php";
class courseusage{
    private $semster;
public function __construct(courses $Semster)
{
 $this->semster=$Semster;   
}
function getCourses(){
    return $this->semster->getcourses();
}

}
?>