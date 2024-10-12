<?php 
if($_SERVER['REQUEST_METHOD']=='GET')

{
if(isset($_GET['delete']))
{
echo "Delete bottun is clicked";

}
else if(isset($_GET['edit']))
{
	echo "Update button is clicked";
}
else
{
	echo "Save changes button is clicked";
}
}
?>