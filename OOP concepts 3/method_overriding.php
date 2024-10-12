<?php

class shape
{
	protected $length;
	protected $width;
	 public function __construct($length,$width)
	{
		$this->length=$length;
		$this->width=$width;
	}
	 public function show()
	{
		echo "this is in base class <br>length is $this->length and width is $this->width";
	}
}

class box extends shape
{
	
	public $height;
	public function __construct($length,$width,$height)
	{
		$this->length=$length;
		$this->width=$width;
		$this->height=$height;
	}
	public function show()
	{
		echo "this is in derived class <br> length is $this->length , width is $this->width and height is $this->height";
	}
	
}

$b1=new box(10,20,30);
$b1->show();
	
?>