<?php
  $conn = mysqli_connect("localhost", "root", "", "testdb");
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }

   $sql = 'DELETE from student  WHERE roll_no=4';

     $retval = mysqli_query($conn,$sql );
   
   if(! $retval ) {
      die('Could not delete data: ' . mysqli_error());
   }
   echo "Deleteded data successfully\n";
   mysqli_close($conn);
?>