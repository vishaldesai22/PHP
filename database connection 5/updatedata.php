<?php
  $conn = mysqli_connect("localhost", "root", "", "testdb");
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_error());
   }

   $sql = 'UPDATE student SET name="Laxaman" WHERE roll_no=1';

     $retval = mysqli_query($conn,$sql );
   
   if(! $retval ) {
      die('Could not update data: ' . mysqli_error());
   }
   echo "Updated data successfully\n";
   mysqli_close($conn);
?>