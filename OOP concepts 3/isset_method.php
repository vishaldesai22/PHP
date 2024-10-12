<?php
class Student {
    private $data = array();
  public function __set($name, $value) 
    {
        $this->data[$name] = $value;
    }
    public function __isset($name) 
    {
        return isset($this->data[$name]);
    }
}
 
$objStudent = new Student();
//$objStudent->phone = '1234';
$flag=isset($objStudent->phone);
//echo isset($objStudent->phone);
if($flag==1)
{
	echo "property set";
}
else
{
	echo "property not set";
}

?>