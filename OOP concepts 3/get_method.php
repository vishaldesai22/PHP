<?php
class Student {
    private $data = array();
 
    public function __set($name, $value) 
    {
        $this->data[$name] = $value;
    }
 
    public function __get($name) 
    {
        If (isset($this->data[$name])) {
            return $this->data[$name];
        }
    }
}
 
$objStudent = new Student();
 
//  __set() called
$objStudent->phone = '12345';   
 
//  __get() called
echo "value of property: ".$objStudent->phone;                      
?>