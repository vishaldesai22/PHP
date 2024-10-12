<?php
class student
{
	public $course="PHP";
	private $fname;
	private $lname;
	public function setdata($fname,$lname)
	{
		$this->fname=$fname;
		$this->lname=$lname;
	}
	public function __sleep()
	{
		return array('fname','lname');
	}
	public function __wakeup()
	{
		echo "this is wakeup method";
	}
}

$obj=new student;
$obj->setdata("SGM","Poly");
$srl=serialize($obj);
//echo $srl;
$usrl=unserialize($srl);
echo "<pre>";
print_r($usrl);
echo "</pre>";


?>