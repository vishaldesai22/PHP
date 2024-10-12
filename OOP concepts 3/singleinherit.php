<?php
	class A {
		private $string;
		 function __construct($string) {
			echo "<b>Hello :" . $string." this is from base class<br>";
		}
		public function show()
		{
			echo "Hello everyone";
		}
		
		
	}
	class B extends A {
		public function __construct($string) {
			echo "<b>Hello,this is derived class :" . $string . "<br>";
		}
		
	}
	
	$b = new B("Shivani");
	$a = new A("Karan");
	$b->show();
	
	
?>