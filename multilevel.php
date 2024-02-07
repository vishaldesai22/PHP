<?php
	class A {
		public function getMyage() {
			return "My age is 90";
		}
	}
	class B extends A {
		public function getMysonage() {
			return "My son age is 60";
		}
	}
	class C extends B {
		public function getMygrandsonage() {
			return "My grand son age is 30";
		}
		public function getmyHistory() {
			echo "<br><b>Class A " .$this->getMyage();
			echo "<br><b>Class B ".$this-> getMysonage();
			echo "<br><b>Class C " . $this->getMygrandsonage();
		}
	}
	$obj = new C();
	$obj->getmyHistory();
?>