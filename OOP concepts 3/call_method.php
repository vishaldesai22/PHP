<?php
class Student {
	
    public function __call($methodName, $arguments) 
    {
         //$methodName = getStudentDetails
         //$arguments = array('1')
		echo "trying to access non existing method";
    }
}
 
$objStudent = new Student();
$objStudent->getStudentDetails(1);
?>