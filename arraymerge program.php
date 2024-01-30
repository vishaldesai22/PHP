<?php
	$name=array("ram","Laxman","sita");
	$age=array("30","25","33");
	
	$newArray=array_combine($name,$age);
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	/*$fruit=["orange","apple","grapes","lemon"];
	//$vegetable=["carrot","pea"];
	//$food=array("pizza","cold drink","apple","mango","lassi");
	$fruit=["o"=>"orange","a"=>"apple","g"=>"grapes","l"=>"lemon"];
	$vegetable=["c"=>"carrot","p"=>"pea","g"=>"grapes"];
	$newArray=array_merge_recursive($fruit,$vegetable);
	//$newArray=$fruit+$vegetable;
	echo "<pre>";
	print_r($newArray);
	echo "</pre>";
	
	foreach($newArray as $key=>$a)
	{
		echo "<h3 value".$a."<br></h3>";
	}*/

	
?>