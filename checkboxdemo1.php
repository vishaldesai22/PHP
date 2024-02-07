
 <?php
  
 $sport=$_POST["sport"];
  
  if(empty($sport)) 
  {
    echo("You didn't select any hobies.");
  } 
  else 
  {
    $N = count($sport);

    echo("You selected $N hobbies (s): ");
    for($i=0; $i < $N; $i++)
    {
      echo($sport[$i] . " , ");
    }
  }
?>